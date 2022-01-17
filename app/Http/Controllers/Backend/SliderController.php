<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function SliderView(){
        $sliders=Slider::latest()->get();
        return view('admin.pages.slider.slider_view',compact('sliders'));
    }

    public function SliderStore(Request $request){
        // $brand=Brand::find($id);
        $slider=new Slider;
        $slider->title=$request->title;
        $slider->description=$request->description;
        
        if ($request->file('slider_img')) {
            $file = $request->file('slider_img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $slider['slider_img'] = $filename;
        }
        $slider->save();
       
        return back();



    }
    
}
