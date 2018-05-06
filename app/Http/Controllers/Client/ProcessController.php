<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcessController extends Controller
{
    function getSuccess($msg) {

        $img = "/background02.jpg";
        $imgSrc  = config('filesystems.disks.image.simple_path') . $img;

        return view('page.process', compact('imgSrc', 'msg'));
    }
}
