<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Client\Branch;
use App\Models\Client\Reservation;
use App\Models\Client\RtStatusHistories;
use App\Models\Client\Member;
use App\Http\Controllers\Controller;
use DB;

class ReservationController extends Controller
{
    function getInfo() {

        $img = "/background02.jpg";
        $imgSrc  = config('filesystems.disks.image.simple_path') . $img;

        $infoBranchList = Branch::allActive();
        $timeBranch = [];

        if ($infoBranchList->count() > 0) {
            $timeBranch = [
                'open_hour' => date('h:i A', strtotime($infoBranchList->first()->open_hour)),
                'close_hour' => date('h:i A', strtotime($infoBranchList->first()->close_hour)),
                'open_hour_val' => $infoBranchList->first()->open_hour,
                'close_hour_val' => $infoBranchList->first()->close_hour
            ];
        }

        return view('page.reservation', compact('imgSrc', 'infoBranchList', 'timeBranch'));
    }

    public function getMemberInfo(Request $req){

        $member = Member::where('phone_number', $req->phone_number)->first();

        if(null == $member) {

            $member = new Member;
            $member->gender = "0";
        }

        return response()->json(['member'=>$member]);
    }

    public function getBranchTimeInfo(Request $req){

        $branch = Branch::allActive()->where('id', $req->branch_id)->first();

        if(null == $branch) {

            $returnData = array(
                'status' => 'error',
                'message' => 'An error occurred!'
            );
            
            return response()->json($returnData);
        } else {

            $branch->open_hour_val = $branch->open_hour;
            $branch->close_hour_val = $branch->close_hour;
            $branch->open_hour = date('h:i A', strtotime($branch->open_hour));
            $branch->close_hour = date('h:i A', strtotime($branch->close_hour));
        }

        return response()->json(['branch'=>$branch]);
    }

    public function insertReservation(Request $req) {

        DB::beginTransaction();

        try{

            $member = new Member;
            $member = Member::where('phone_number', $req->phone_number)->first();
         
            // Trường hợp không tồn tại member.
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
                $member->birth_date = $req->birth_date;
                $member->gender = $req->gender;
                $member->email = $req->email;
                $member->address = $req->address;

                $member->update();
            }

            $reservation = new Reservation;
            $reservation->member_id = $member->id;
            $reservation->branch_id = $req->branch_id;
            $reservation->rt_type_id = $req->rt_type_id;
            $reservation->reservation_date = $req->reservation_date;
            $reservation->reservation_hour = $req->reservation_hour;
            $reservation->number_of_people = $req->number_of_people;
            $reservation->note = $req->note;
            $reservation->save();

            $reservation->reservation_no = "R".str_pad($reservation->id, 6, '0', STR_PAD_LEFT);
            $reservation->update();

            $rtStatusHistories = new RtStatusHistories;
            $rtStatusHistories->rt_id = $reservation->id;
            $rtStatusHistories->status_id = '0';
            $rtStatusHistories->save();
          
            DB::commit();

            return redirect()->route('success', $reservation->reservation_no);
        } catch(\Exception $e) {
 
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with('thongbao','Đặt bàn thất bại');
        }
    }
}
