<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Client\Member;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    function getInfo() {

        $img = "/background02.jpg";
        $imgSrc  = config('filesystems.disks.image.simple_path') . $img;

        return view('page.member', compact('imgSrc'));
    }

    public function getMemberInfo(Request $req){

        $member = Member::where('phone_number', $req->phone_number)->first();

        if(null == $member) {

            $member = "";
        }

        return response()->json(['member'=>$member]);
    }
}
