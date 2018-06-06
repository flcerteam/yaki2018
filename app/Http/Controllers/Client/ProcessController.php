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

        try
        {
            Mail::send('page.mail', compact('code'), function($message) {
                $message->to('nguyenmai051088@gmail.com')->subject('YAKI ORDER NEW !!!');
            });
        }
        catch(Exception $e)
        {

        }

        return view('page.process', compact('code'));
    }
}
