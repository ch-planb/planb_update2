<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectCategoryController extends Controller
{
    public function Create()
    {
       return view('admin.pages.project_category.create');
    }

    public function manage()
    {
       return view('admin.pages.project_category.manage');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:project_categories',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $project_category = new ProjectCategory();

        $project_category->name = $request->name;
        
        $project_category->save();
    } 

    public function getProjectCategoriesData()
    {
       $project_categories = ProjectCategory::latest()->get();
       return response()->json($project_categories);
    }

    public function delete($id)
    {
        $project_category = ProjectCategory::find($id);

        $project_category->delete();
        return redirect()->back();
    }
 
    
}
