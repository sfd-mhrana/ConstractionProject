<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamMemberReq;
use App\Models\TeamMemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamMemberCon extends Controller
{
    public function store(TeamMemberReq $request,$id,$projectId){
       
        $other= $request->all();
        $project=new TeamMemberModel;
        $project->user_id=$id;
        $project->project_id=$projectId;
        $project->team_id=$request->input('team_id');
        $project->member_id=$request->input('member_id');
        if( $project->save()){
            Session::flash('success','Data Update sucess');
       }
        else{
           Session::flash('success','Data Not Update');
        }
       return  redirect()->to('/project/teammembers/'.$id.'/'.$projectId);
    }
}
