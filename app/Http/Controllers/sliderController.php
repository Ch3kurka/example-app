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
    public function edit($id)
    {
        $edit = SliderForm::find($id);


        return view('adminka/admPages/pagesCont/Slider/formEditPage',['edit'=>$edit]);
    }
    public function data()
    {
        $data = SliderForm::all();
    return veiw();
    }

    public function update(Request $request, $id)
    {
        $edit = SliderForm::find($id);
        $edit->first_text = $request->input('first_text');
        $edit->second_text = $request->input('second_text');
        $edit->button_text = $request->input('button_text');
        $edit->button_link = $request->input('button_link');
        if (request()->has('file_name'))
        {$path = Storage::disk('public')->put('images', $request->file('file_name'));
        $edit->file_name = $path;}

        $edit -> save();
        return redirect('/sliderEdit');
    }
}
