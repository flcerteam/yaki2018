<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuffetController extends Controller
{
    function getInfo($name, $id) {

        return view('buffet.buffet');
    }
}
