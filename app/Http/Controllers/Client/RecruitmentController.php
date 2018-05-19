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

        if (null != $news)
        {
            $idx = 1;
            foreach ($news as $new)
            {
                $new->index = $idx;
                $new->no = sprintf('%02d', $idx);
                $new->content = nl2br($new->content);

                $idx++;
            }
        }

        return view('page.recruitment', compact('news'));
    }
}
