<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Parameter;
use App\Models\Client\Event;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ParametersController extends Controller
{
    public function getAboutContent() {

        $disk  = config('filesystems.disks.about.simple_path');

        // get about
        $parameter = Parameter::where('param_id','YAKI_ABOUT')->first();

        $files = Storage::disk('about')->allFiles();

        $images = array();
        for ($i = 0; $i < count($files); $i++)
        {
            $file_name = $files[$i];

            if ($this->isImageFile($file_name))
            {
                array_push($images, $disk . "/" . $file_name);
            }
        }

        if (null != $parameter) {
            $parameter->content = nl2br($parameter->content);
        }

        return view('about.about',compact('parameter', 'images'));
    }

    public function getEventDetail($title,$id) {
        // get event
        $event = Event::where('id',$id)->first();
        return view('detail.eventDetail',compact('event'));
    }

    private function isImageFile($fileName)
    {
        return ($this->endsWith($fileName, 'jpeg')
            || $this->endsWith($fileName, 'jpg')
            || $this->endsWith($fileName, 'png'));
    }

    private function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return $length === 0 || (substr($haystack, -$length) === $needle);
    }
}
