<?php

namespace App\Http\Controllers;

use App\Models\SliderForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        //$SliderForm -> file_name = $request->file('file_name')->store('public/images');


        $path = Storage::disk('public')->put('images', $request->file('file_name'));
        $SliderForm -> file_name = $path;
        $SliderForm->save();
        return redirect('/sliderEdit');
    }
    public function index()
    {
        $slider_forms = SliderForm::all();
        return view('adminka/admPages/pagesCont/Slider/sliderEdit', ['slider_forms' => $slider_forms]);
    }
    public function delete($id)
    {

        $delete = SliderForm::find($id);
    Storage::disk('public')->delete('images',$delete['file_name']);
        $delete -> delete();
        return redirect('/sliderEdit');
    }
    public function edit()
    {
    return view('');
    }
    public function update($id)
    {


    }


}
