<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectTaskCostReq;
use App\Models\ProjectTaskCostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectTaskCostCon extends Controller
{
    public function store(ProjectTaskCostReq $request,$id,$projectId){
       
         $other= $request->all();
         $project=new ProjectTaskCostModel;
         $project->user_id=$id;
         $project->project_id=$projectId;
         $project->task_id=$request->input('task_id');
         $project->details=$request->input('details');
         $project->date=$request->input('date');
         $project->amount=$request->input('amount');
         $project->status='New Cost';
         if( $project->save()){
             Session::flash('success','Data Update sucess');
        }
         else{
            Session::flash('success','Data Not Update');
         }
        return  redirect()->to('/project/taskcost/'.$id.'/'.$projectId);
     }
}
