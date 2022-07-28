<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskInstitumentCostReq;
use App\Models\TaskInstitumentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskInstitumentCostCon extends Controller
{
    public function store(TaskInstitumentCostReq $request,$id,$projectId){
       
        $other= $request->all();
        $project=new TaskInstitumentModel();
        $project->user_id=$id;
        $project->project_id=$projectId;
        $project->task_id=$request->input('task_id');
        $project->institument_name=$request->input('institument_name');
        $project->date=$request->input('date');
        $project->amount=$request->input('amount');
        if( $project->save()){
            Session::flash('success','Data Update sucess');
       }
        else{
           Session::flash('success','Data Not Update');
        }
       return  redirect()->to('/project/institumentcost/'.$id.'/'.$projectId);
    }
}
