<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function Create(){

        return view('admin.pages.project.create');

    }

    public function ProjectStore(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'sub_title' => 'required',
            'details' => 'required',
            'target' => 'required',
            'link' => 'required',
            'image' => 'required|mimes:jpg.png,jpeg,gif|image',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $project = new Project();

        //Project Image Start
        if ($path = $request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('Upload/Images/Project', $filename);
            $path = $filename;
        }
        //Project Image End


        $project->title = $request->title;
        $project->sub_title = $request->sub_title;
        $project->details = $request->details;
        $project->target = $request->target;
        $project->link = $request->link;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->image = $path;
        
        $project->save();
    }
    
}
