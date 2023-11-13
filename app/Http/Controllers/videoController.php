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
    $path = Storage::disk('public')->putFile('public', $request->file('file_path'));
    $videoadd -> file_path = $path;
    $videoadd->save();
    return redirect('/videoEdit');

}

public function index()
{
   $video = video::find(1);
   return view('/adminka/admPages/Video/videoSmpl', ['video'=>$video]);
}
    public function update(Request $request, $id)
    {
        $video = video::find($id)->first();
        $video->first_text = $request->input('first_text');
        $video->second_text = $request->input('second_text');
        if (request()->has('file_path'))
        {$path = Storage::disk('public')->put('public', $request->file('file_path'));
            $video->file_name = $path;}

        $video -> save();
        return redirect('/videoEdit');
    }
}
