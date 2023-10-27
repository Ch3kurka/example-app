<?php

namespace App\Http\Controllers;

use App\Models\slidermodel;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    //
}
public function store(Request $request)
{
    $model = new slidermodel;
    $model->FirstText = $request->input('FirstText');
    $model->SecondText = $request->input('SecondText');
    $model->ButtonText = $request->input('Button Text');
    $model->ButtonLink = $request->input('Button Link');
    $model->Image = $request->input('Image');
    $model->save();

    return redirect()->back()->with('success', 'Data has been added successfully');
}
