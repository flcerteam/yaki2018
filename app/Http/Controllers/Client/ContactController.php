<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Client\Branch;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    function getInfo()
    {
        $contactList = [];
        $disk  = config('filesystems.disks.branches.simple_path');
        $infoList = Branch::allActive();

        foreach ($infoList as $dtl)
        {    
            if ($dtl->firstImage() != null)
            {
                $dtl->image = $disk . "/" . $dtl->firstImage()->name;
            }   
        }
    
        return view('page.contact', compact('infoList'));
    }

    function getDetailInfo($slug)
    {
        $disk  = config('filesystems.disks.branches.simple_path');

        $contactInfo = Branch::infoBySlug($slug);
        
        if ($contactInfo->firstImage() != null)
        {
            $contactInfo->image = $disk . "/" . $contactInfo->firstImage()->name;
        }

        return view('page.contact-dtl', compact('contactInfo'));
    }
}
