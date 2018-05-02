<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Member;
use Cart;
use DB;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class CheckOutController extends Controller {

  /**
   * get custommer infomation by phone number
   */
  public function getCustomerInfo(Request $req){
      $input = $req->all();
      $customer = Member::where('phone_number',$input['phone'])->first();
      if( null == $customer) {
        $returnData = array(
            'status' => 'error',
            'message' => 'An error occurred!'
        );
        return response()->json($returnData);
      }
      return response()->json(['customer'=>$customer]);
  }

  /**
   * update quantity of item
   */
  public function updateQtty(Request $req) {
    $input = $req->all();
    Cart::update($input['rowId'],$input['qty']);
    $total = Cart::get($input['rowId'])->qty * Cart::get($input['rowId'])->price;
    $totalQty =Cart::count();
    $subTotal = Cart::subTotal();
    return response()->json(['total'=>$total,'totalQty'=>$totalQty,'subTotal'=>$subTotal]);
  }

  /**
   * 
   */
  public function removeItem(Request $req) {
    $input = $req->all();
    Cart::remove($input['rowId']);
    $subTotal = Cart::subTotal();
    $totalQty =Cart::count();
    return response()->json(['subTotal'=>$subTotal,'totalQty'=>$totalQty]);
  }

  public function insertOrder(Request $req) {
    DB::beginTransaction();
    try{
      $cart = Cart::content();
      $member = new Member;
      $member = DB::table('members')
                  ->where([
                    ['name',$req->name],
                    ['email', $req->email],
                    ['phone_number',$req->phone]])
                  ->first();
     
      // nếu đã tồn tại customer thì k add thêm
      if(null == $member) {
        $member = new Member;
        $member->name = $req->name;
        $member->birth_date = $req->birth;
        $member->gender = $req->gender;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->phone_number = $req->phone;
        $member->save();
       
      }
      $order = new Order;
      $order->member_id = $member->id;
      $order->status = '0';
      $order->invoice_no = '0';
      $order->invoice_date = date('Y-m-d');
      $order->shipping_address = $member->address;
      $order->comment = $req->note;
      $order->total_discount =  (float)Cart::subTotal();
      $order->total =  (float)Cart::subTotal();
      $order->save();
      
      foreach ($cart as $value) {
          $product = Product::where('id',$value->id)->first();
          $orderDetail = new OrderDetail;
          $orderDetail->order_id = $order->id;
          $orderDetail->product_id = $product->id;
          $orderDetail->quantity = $value->qty;
          $orderDetail->price = (float)$product->price;
          $orderDetail->name = $product->name;
          $orderDetail->sku = $product->sku;
          $orderDetail->save();
      }
      DB::commit();
      Cart::destroy();
      return redirect()->back()->with('thongbao','Đặt hàng thành công');
    } catch(\Exception $e) {
      dd($e->getMessage());   // insert query
      DB::rollback();
      return redirect()->back()->with('thongbao','Đặt hàng thất bại');
    }
  }
}
