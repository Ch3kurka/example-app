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
    return redirect('/video');

}

public function index()
{
   $video = video::all();
   return view('/adminka/admPages/videoApp', ['video'=>$video]);
}
}
