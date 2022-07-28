<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamCostReq;
use App\Models\TeamCostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamCostCon extends Controller
{
    public function store(TeamCostReq $request,$id,$projectId){
       
        $other= $request->all();
        $project=new TeamCostModel;
        $project->user_id=$id;
        $project->project_id=$projectId;
        $project->team_id=$request->input('team_id');
        $project->details=$request->input('details');
        $project->date=$request->input('date');
        $project->amount=$request->input('amount');
        $project->status='Team Cost';
        if( $project->save()){
            Session::flash('success','Data Update sucess');
       }
        else{
           Session::flash('success','Data Not Update');
        }
       return  redirect()->to('/project/teamcost/'.$id.'/'.$projectId);
    }
}
