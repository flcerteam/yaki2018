<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Mail;

class ProcessController extends Controller
{
    function getSuccess() {
        
        $code = Session::get('code');

        Mail::send('page.mail', compact('code'), function($message){
	        $message->to('yaki.callcenter@gmail.com', 'yaki2018')->subject('!!! ORDER NEW !!!');
	    });

        return view('page.process', compact('code'));
    }
}
