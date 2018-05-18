<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Parameter;
use Illuminate\Http\Request;

class ParametersController extends Controller
{
    public function getParameterView(){
        // get about
        $parameter = Parameter::where('param_id','YAKI_ABOUT')->first();
        return view('about.about',compact('parameter'));
    }
}
