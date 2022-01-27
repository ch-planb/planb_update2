<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CompanyInfoController extends Controller
{
    public function updateForm()
    {
        $companyInfo = CompanyInfo::latest()->first();
        
        return view('admin.pages.company_info.update', compact('companyInfo'));
    }

    public function update(Request $request)
    {
        $info_update = CompanyInfo::where('id', $request->id)->first();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'fb_link' => 'required',
            'twitter_link' => 'required',
            'linkedin_link' => 'required',
            'insta_link' => 'required',
            'skype_link' => 'required',
            'short_description' => 'required',
            'logo' => 'required|mimes:jpg,png,jpeg,gif|image',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        //Company Logo Start
        if ($request->hasfile('logo')) {
            
            $destination = public_path('upload/logo/' .$info_update->logo);
            if (file_exists($destination)) {
                unlink($destination);
            }

            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('upload/logo/', $filename);
            $path = $filename;
        }
        //Company Logo End


        $info_update->name = $request->name;
        $info_update->email = $request->email;
        $info_update->mobile = $request->mobile;
        $info_update->fb_link = $request->fb_link;
        $info_update->twitter_link = $request->twitter_link;
        $info_update->linkedin_link = $request->linkedin_link;
        $info_update->insta_link = $request->insta_link;
        $info_update->skype_link = $request->skype_link;
        $info_update->short_description = $request->short_description;
        $info_update->logo = $path;
        
        $info_update->save();
    }

}
