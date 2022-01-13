<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    // ===================page show=======================
    public function index()
    {
        $whatWeDo = WhatWeDo::get();
        return view('admin.pages.what_we_do.index',compact('whatWeDo'));
    }




    //============================== add data page=======================
    public function create(){
  
        return view('admin.pages.what_we_do.create');
    }





    //============================== page data store===========
    public function store(Request $request)
   
     {

        $validatedata = $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
         $whatWeDo = WhatWeDo::create([
           'title'=> $request->title,
           'description'=> $request->description,
         ]);
         $whatWeDo->save();
         $notification = array(
            'message' =>  'Update Successfully',
            'alert-type' => 'success'
        ); 
         return redirect(route('whatWeDo.index'))->with($notification);


    }

     //========================= page edit===================
     public function edit($id)
     {
         $data = WhatWeDo::findorfail($id);
        return view('admin.pages.what_we_do.edit',compact('data'));
     }


     //================= page data update===============
     public function update(Request $request, $id)
     {
        $validatedata = $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
       $updateData=WhatWeDo::findorfail($id)->update([
          
           'title'=> $request->title,
           'description'=> $request->description,
        ]);
       $notification = array(
        'message' =>  'Update Successfully',
        'alert-type' => 'success'
         ); 
        return redirect(route('whatWeDo.index'))->with($notification);

    }
     //================== page data delete==================
    public function delete($id)
    {
        $deletedata=WhatWeDo::findorfail($id)-> delete();
        $notification = array(
            'message' =>  'Delete Successfully',
            'alert-type' => 'warning'
             ); 
        return redirect()->back()->with($notification);
    }


}
