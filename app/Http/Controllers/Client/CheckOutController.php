<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Client\Member;
use Cart;
use DB;
use Session;
use App\Models\Client\Order;
use App\Models\Client\OrderDetail;
use App\Models\Client\Product;
use App\Models\Client\OrderStatusHistory;
use App\Http\Controllers\Controller;

class CheckOutController extends Controller {

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
      $member = Member::where([
                    ['name',$req->name],
                    ['email', $req->email],
                    ['phone_number',$req->phone_number]])
                  ->first();
     
      // nếu đã tồn tại customer thì k add thêm
      if(null == $member) {
        $member = new Member;

        $member->name = $req->name;
        $member->birth_date = $req->birth_date;
        $member->gender = $req->gender;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->phone_number = $req->phone_number;
        $member->save();
       
      } else {
        $member->name = $req->name;
        $member->birth_date = $req->birth;
        $member->gender = $req->gender;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->update();
      }
      // insert into table order
      $order = new Order;
      $order->member_id = $member->id;
      $order->status_id = '0';
      $order->invoice_no = '0';
      $order->invoice_date = date('Y-m-d H:i:s');
      $order->shipping_address = $member->address;
      $order->billing_address = $member->address;
      $order->comment = $req->note;
      $order->total = (float)str_replace(',', '', Cart::subTotal());
      $order->save();
     
      $order->invoice_no = "O".str_pad($order->id, 6, '0', STR_PAD_LEFT);
      $order->update();
     
      // insert into table order detail
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
      // insert into table OrderStatusHistory
      $orderStatusHistory = new OrderStatusHistory;
      $orderStatusHistory->order_id = $order->id;
      $orderStatusHistory->status_id = $order->status_id;
      $orderStatusHistory->save();
      DB::commit();
      Cart::destroy();

       // PROCESS
       Session::put('code', $order->invoice_no);
       return redirect()->route('success');
    } catch(\Exception $e) { 
      dd( $e->getMessage());
      DB::rollback();
      return redirect()->back()->with('thongbao','Đặt hàng thất bại');
    }
  }
}
