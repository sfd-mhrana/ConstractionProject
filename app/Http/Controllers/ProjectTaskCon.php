<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectTaskReq;
use App\Models\ProjectModel;
use App\Models\ProjectTaskCostModel;
use App\Models\ProjectTaskModel;
use App\Models\TaskInstitumentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectTaskCon extends Controller
{
    
    public function index($id,$projectId){
        $this->data['projects']=ProjectModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $this->data['tasks']=ProjectTaskModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $this->data['user_id']=$id;
        $this->data['project_id']=$projectId;
        return view('project/task/index',$this->data);
    }

    public function create($id,$projectId){
        $this->data['projects']=ProjectModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $this->data['tasks']=ProjectTaskModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $this->data['user_id']=$id;
        $this->data['project_id']=$projectId;
        return view('project/task/from',$this->data);
    } 

    public function store(ProjectTaskReq $request,$id,$projectId){
       $randomprojectID=rand();
       $todayDate=date("Y-m-d");
       while(ProjectTaskModel::where('task_id',$randomprojectID)->exists()){
            $randomprojectID=rand();
       }
        $other= $request->all();
        $project=new ProjectTaskModel;
        $project->user_id=$id;
        $project->project_id=$projectId;
        $project->task_id=$randomprojectID;
        $project->task_name=$request->input('task_name');
        $project->task_status=$request->input('task_status');
        $project->task_budgect=$request->input('task_budgect');
        $project->comments=$request->input('comments');
        $project->creating_date=$todayDate;
        $project->start_date=$request->input('start_date');
        $project->ending_date=$todayDate;
        if( $project->save()){
            Session::flash('success','Data Update sucess');
       }
        else{
           Session::flash('success','Data Not Update');
        }
       return  redirect()->to('/project/tasklist/'.$id.'/'.$projectId);
    }
 
    public function taskconst($id,$projectId){ 
        $this->data['projects']=ProjectModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $tasks=ProjectTaskModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $this->data['taskcosts']=ProjectTaskCostModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $this->data['tasks']=$tasks;
        if(sizeof($tasks)>0){
            foreach($tasks as $task){
            $this->data['task'][$task->task_id]=$task->task_name;
        }
        }else{
            $this->data['task']['No Data Found']="No Data Found";
        }
        
        $this->data['user_id']=$id;
        $this->data['project_id']=$projectId;
        return view('project/task/taskcost',$this->data);
    } 
     
    public function institumentcost($id,$projectId){ 
        $this->data['projects']=ProjectModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $tasks=ProjectTaskModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $this->data['institumentcosts']=TaskInstitumentModel::where('user_id',$id)->where('project_id',$projectId)->get();
        $this->data['tasks']=$tasks;

        if(sizeof($tasks)>0){
            foreach($tasks as $task){
            $this->data['task'][$task->task_id]=$task->task_name;
        }
        }else{
            $this->data['task']['No Data Found']="No Data Found";
        }
        $this->data['user_id']=$id;
        $this->data['project_id']=$projectId;
        return view('project/institument/index',$this->data);
    } 
    
}
