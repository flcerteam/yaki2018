<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ProcessController extends Controller
{
    function getSuccess() {
        
        $code = Session::get('code');

        return view('page.process', compact('code'));
    }
}
