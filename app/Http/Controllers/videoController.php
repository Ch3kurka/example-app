<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class videoController extends Controller
{
public function store(Request $request)
{
    $videoadd = new video;
    $videoadd->first_text= $request->input('first_text');
    $videoadd->second_text= $request->input('second_text');
    $path = Storage::disk('public')->putFile('videos', $request->file('file_path'));
    $videoadd -> file_path = $path;
    $videoadd->save();
    return redirect('/videoEdit');

}

public function index()
{
   $video = video::all()->find(1);
   return view('/adminka/admPages/pagesCont/Video/videoSmpl', ['video'=>$video]);

}
    public function update(Request $request)
    {
        $video = video::find(1);
        $video->first_text = $request->input('first_text');
        $video->second_text = $request->input('second_text');
        if (request()->has('file_path'))
        {

            $path = Storage::disk('public')->putFile('videos', $request->file('file_path'));

            $video->file_path = $path;
        }

        $video -> save();
        return redirect('/videoEdit');
    }
}
