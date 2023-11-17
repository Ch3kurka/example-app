<?php

namespace App\Http\Controllers;

use App\Models\section;
use Illuminate\Http\Request;

class sectionController extends Controller
{
public function store(Request $request)
{
    $create = new section;
    $create -> category = $request->input('category');
    $create->save();
    return redirect('/galleryEdit');
}

public function index()
{
    $index = section::all();
    return view('adminka/admPages/pagesCont/Gallery/editS', ['galleryEdit'=>$index]);
}
}
