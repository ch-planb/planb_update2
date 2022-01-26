<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Ramsey\Uuid\v1;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        return view('admin.pages.our_team.manage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.our_team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'fb_link' => 'required',
            'join_date' => 'required',
            'profile_picture' => 'required|mimes:jpg,png,jpeg,gif|image',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $our_team = new Team();

        //Profile Picture Start
        if ($request->hasfile('profile_picture')) {
            $file = $request->file('profile_picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('Upload/Images/Our_Team', $filename);
            $path = $filename;
        }
        //Profile Picture End


        $our_team->name = $request->name;
        $our_team->designation = $request->designation;
        $our_team->fb_link = $request->fb_link;
        $our_team->twitter_link = $request->twitter_link;
        $our_team->linkedin_link = $request->linkedin_link;
        $our_team->insta_link = $request->insta_link;
        $our_team->skype_link = $request->skype_link;
        $our_team->join_date = $request->join_date;
        $our_team->profile_picture = $path;
        
        $our_team->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showMembers()
    {
        $show_members = Team::latest()->get();
        
        return response()->json($show_members);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $teamMember = Team::find($id);

        $teamMember->delete();
        return redirect()->back();
    }
}
