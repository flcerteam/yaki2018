<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Controller;

use App\Models\Client\Recruitment;

class RecruitmentController extends Controller
{
    function getNews() {

        $news = Recruitment::where('status', '=', 0)->orderBy('created_at', 'DESC')->get();

        return view('page.recruitment', compact('news'));
    }
}
