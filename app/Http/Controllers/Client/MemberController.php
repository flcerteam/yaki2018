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
        } else {
            
            $member->member_type_name = $member->getMemberTypeName();
        }

        return response()->json(['member'=>$member]);
    }

    public function getPointMemberInfo(Request $req){

        return view('page.member-point');
    }

    public function getRequlationMemberInfo(Request $req){

        return view('page.member-requlation');
    }
}
