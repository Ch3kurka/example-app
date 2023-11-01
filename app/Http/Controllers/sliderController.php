<?php

namespace App\Http\Controllers;

use App\Models\SliderForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sliderController extends Controller
{

    public function store(Request $request)
   {
//       dd($request->all());
        $SliderForm = new SliderForm;
        $SliderForm->first_text= $request->input('first_text');
        $SliderForm->second_text= $request->input('second_text');
        $SliderForm->button_text= $request->input('button_text');
        $SliderForm->button_link= $request->input('button_link');
        $SliderForm -> file_name = $request->file('file_name')->store('public/images');
        $SliderForm->save();
        return redirect('/sliderEdit');
    }
    public function index()
    {
        $slider_forms = DB::table('slider_forms');
        return view('/sliderEdit', ['slider_forms' => $slider_forms]);
    }
}
