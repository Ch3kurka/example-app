<?php

namespace App\Http\Controllers;

use App\Models\SliderForm;
use Illuminate\Http\Request;

class sliderController extends Controller
{

    public function store(Request $request)
    {
        $SliderForm = new SliderForm;
        $SliderForm->first_text= $request->input('first_text');
        $SliderForm->second_text= $request->input('second_text');
        $SliderForm->button_text= $request->input('button_text');
        $SliderForm->button_link= $request->input('button_link');
//        $SliderForm -> file_name = $request -> input('filename');

        $SliderForm->save();
        return redirect('/slider');
    }
}
