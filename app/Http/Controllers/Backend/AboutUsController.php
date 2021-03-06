<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{
       // =================== about page show=======================
       public function index()
       {
           return view('admin.pages.about_us.add-about');
       }

       public function store(Request $request)
       {
          
          
           $validatedata = $request->validate([
                 'title'=>'required',
                 'description'=>'required',
                 'image'=>'required',
             ]);
   
   
           // icon upload and save
           $image = $request->file('image');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->save('upload/about_image/'.$name_gen);
           $save_url = 'upload/about_image/'.$name_gen;
          
   
        
   
        $about = AboutUs::create([
                   'title'=> $request->title,
                   'description'=> $request->description,
                   'about_img'=> $save_url,
                   'core_values'=>serialize($request->core_values),
                 ]);
        $about->save();

           $notification = array(
                 'message' =>  'Add Successfully',
                 'alert-type' => 'success'
             );
           return back()->with($notification);
       }


       public function view()
       {
           $about = AboutUs::all();
           return view('admin.pages.about_us.show-about', compact('about'));
       }


       public function delete($id)
       {
           $deletedata=AboutUs::findorfail($id);
           $image = $deletedata->about_img;
           unlink($image);
           $deletedata->delete();
           $notification = array(
               'message' =>  'Delete Successfully',
               'alert-type' => 'warning'
                );
           return redirect()->back()->with($notification);
       }
       
       public function getData(){
        $array=[];
        $all_data=AboutUs::get('core_values');
        $new_array=$all_data->toArray();
        for ($i=0; $i<count($new_array); $i++) { 
            $arr=$new_array[$i]['core_values'];
            array_push($array,$arr); 
        }
       foreach ($array as $values){
        $data=unserialize($values);
        dump($data);
       }   
       }


}
