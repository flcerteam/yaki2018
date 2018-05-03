<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;

class HomeController extends Controller
{
    public function getHomeData(){
        
        return view('page.trangchu');
    }
}
