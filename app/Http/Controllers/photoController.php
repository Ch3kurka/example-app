<?php

namespace App\Http\Controllers;

use App\Models\photo;
use App\Models\section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class photoController extends Controller
{
    public function index()
    {
        $show = section::all();
        return view('adminka/admPages/pagesCont/Gallery/createPh', ['show'=>$show]);

    }
    public function showPhoto()
    {
        $display = photo::all();
        return view('adminka/admPages/pagesCont/Gallery/allPhoto', ['display'=>$display]);

    }
    public function showCategories()
    {
        $cate = section::all();
        return view('adminka/admPages/pagesCont/Gallery/editPhS', ['cate'=>$cate]);

    }


    public function createPhoto(Request $request)
    {
        $create = new photo();
        $path = Storage::disk('public')->putFile('images', $request->file('photo_path'));
        $create -> photo_path = $path;
        $create->save();

        $categories = $request->input('categories');

        $create->section()->sync($categories);
        return redirect('/galleryEdit');

    }
    public function ShowPhotoInCategory($id)
    {
        $photos = section::find($id);
        $photo = $photos->section;
    return view('adminka/admPages/pagesCont/Gallery/showPhAndCat' , ['photo'=>$photo]);
    }

}
