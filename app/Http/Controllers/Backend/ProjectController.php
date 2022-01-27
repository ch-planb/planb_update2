<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function Create(){

        $project_categories = ProjectCategory::latest()->get();
        return view('admin.pages.project.create', compact('project_categories'));

    }

    public function ProjectStore(Request $request){

        $validator = Validator::make($request->all(), [
            'pro_cat_id' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'details' => 'required',
            'target' => 'required',
            'link' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|image',
            'thumbnail' => 'required|mimes:jpg,png,jpeg,gif|image',
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
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('upload/project', $filename);
            $path = $filename;
        }
        //Project Image End

        //Project Thumbnail Start
        if ($request->hasfile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('upload/project', $filename);
            $thumbnail_path = $filename;
        }
        //Project Thumbnail End

        $project->pro_cat_id = $request->pro_cat_id;
        $project->client_id = $request->client_id;
        $project->title = $request->title;
        $project->sub_title = $request->sub_title;
        $project->details = $request->details;
        $project->target = $request->target;
        $project->link = $request->link;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->image = $path;
        $project->thumbnail = $thumbnail_path;
        
        $project->save();
    }

    public function manage()
    {
        return view('admin.pages.project.manage');
    }

    public function getProjectsData()
    {
        $projects = Project::with('projectCategory')->latest()->get();
        return response()->json($projects);
    }
    
    public function delete($id)
    {
        $project = Project::find($id);

        $project->delete();
        return redirect()->back();
    }

    public function changeStatus(Request $request, $id)
    {
        $statusChange = Project::find($id);

        if ($statusChange->status == 'Published') {

            $statusChange->status = 'Draft';
            $statusChange->save();

            return response()->json($statusChange);
        }else{

            $statusChange->status = 'Published';
            $statusChange->save();

            return response()->json($statusChange);
        }
    }

    
    
}
