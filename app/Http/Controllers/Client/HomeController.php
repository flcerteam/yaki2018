<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomeData(){
        return view('page.trangchu');
    }
}
