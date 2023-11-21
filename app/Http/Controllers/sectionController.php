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
    $show = section::all();
    return view('adminka/admPages/pagesCont/Gallery/editS', ['show'=>$show]);

}
public function delete($id)
{

    $delete = section::find($id);

    $delete -> delete();
    return redirect('/galleryEdit');
}

    public function update(Request $req, $id)
    {
        $update = section::find($id);
        $update->category = $req->input('category');
        $update -> save();
        return redirect('/galleryEdit');
    }


}
