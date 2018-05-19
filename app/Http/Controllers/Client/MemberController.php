<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Client\Member;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    function getInfo() {

        return view('page.member');
    }

    public function getMemberInfo(Request $req){

        $member = Member::where('phone_number', $req->phone_number)->first();

        if(null == $member) {

            $member = "";
        }

        return response()->json(['member'=>$member]);
    }
}
