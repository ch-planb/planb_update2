<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // ===================page show=======================
    public function index()
    {
        $services = Service::get();
        return view('admin.pages.services.show-service', compact('services'));
    }
  
    //============================== add data page=======================
    public function add()
    {
        return view('admin.pages.services.add-service');
    }
  
  
  
  
  
    //============================== page data store===========
    public function store(Request $request)
    {
        // dd($request);
        $validatedata = $request->validate([
              'title'=>'required',
              'description'=>'required',
              'icon'=>'required',
          ]);


        // icon upload and save
        $image = $request->file('icon');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(870, 370)->save('upload/service_icon/'.$name_gen);
        $save_url = 'upload/service_icon/'.$name_gen;

        // check if this is special service
        $service=$request->special_service;
        if($service=='on'){

            $services = Service::create([
                'title'=> $request->title,
                'description'=> $request->description,
                'icon'=> $save_url,
                'special_service'=>1,
              ]);
        }
        else{
            $services = Service::create([
                'title'=> $request->title,
                'description'=> $request->description,
                'icon'=> $save_url,
              ]);
        }
       
        $services->save();
        $notification = array(
              'message' =>  'Add Successfully',
              'alert-type' => 'success'
          );
        return redirect(route('service.index'))->with($notification);
    }
  
    //    //========================= page edit===================
    public function edit($id)
    {
        $data = Service::findorfail($id);
        return view('admin.pages.services.edit-service', compact('data'));
    }
  
  
    //================= page data update===============
    public function update(Request $request, $id)
    {
        
        $validatedata = $request->validate([
              'title'=>'required',
              'description'=>'required',
              'icon'=>'required',
          ]);


        $updateData=Service::findorfail($id);
        $old_img = $updateData->icon;
        // dd($old_img);
        if ($request->file('icon')) {
            unlink($old_img);
            $image = $request->file('icon');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(870, 370)->save('upload/service_icon/'.$name_gen);
            $save_url = 'upload/service_icon/'.$name_gen;

             // check if this is special service
            $service=$request->special_service;
             if($service=='on'){

            $updateData->update([
            
                'title'=> $request->title,
                'description'=> $request->description,
                'icon'=> $save_url,
                'special_service'=>1,
                ]);
        }
        else{

            $updateData->update([
                'title'=> $request->title,
                'description'=> $request->description,
                'icon'=> $save_url,
                'special_service'=>0,
                ]);
        }


          
            $notification = array(
          'message' =>  'Update Successfully',
          'alert-type' => 'success'
           );
            return redirect(route('service.index'))->with($notification);
        }
    }

        //    //================== page data delete==================
      public function delete($id)
      {
          $deletedata=Service::findorfail($id);
          $icon = $deletedata->icon;
          unlink($icon);
          $deletedata->delete();
          $notification = array(
              'message' =>  'Delete Successfully',
              'alert-type' => 'warning'
               );
          return redirect()->back()->with($notification);
      }
    }
  
