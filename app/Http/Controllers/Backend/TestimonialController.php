<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function testimonialView(){
        $clients=Client::all();
    
        $testimonials=Testimonial::latest()->get();
        return view('admin.pages.testimonial.testimonial_view',compact('testimonials'
    ,'clients'));
    }

    public function testimonialStore(Request $request){
    
        // $brand=Brand::find($id);
        $testimonial=new Testimonial;
    
        $testimonial->testimonial=$request->testimonial;
        $testimonial->client_id=$request->client_id;
        
        if ($request->file('slider_img')) {
            $file = $request->file('slider_img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/testimonals'),$filename);
            $testimonial['slider_img'] = $filename;
        }
        $testimonial->save();
       
        return back();



    }
}
