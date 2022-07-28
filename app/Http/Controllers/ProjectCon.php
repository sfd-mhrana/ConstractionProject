<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectReq;
use App\Models\CreateTeamModel;
use App\Models\ProjectCostMode;
use App\Models\ProjectModel;
use App\Models\ProjectTaskCostModel;
use App\Models\ProjectTaskModel;
use App\Models\TaskInstitumentModel;
use App\Models\TeamCostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectCon extends Controller
{
   

    public function index($id){
        
        $this->data['projects']=ProjectModel::where('user_id',$id)->get();
        $this->data['user_id']=$id;
        return view('project/projectlist',$this->data);
    }

    public function create($id){
        $this->data['projects']=ProjectModel::where('user_id',$id)->get();
        $this->data['user_id']=$id;
        return view('project/createproject',$this->data);
    }

    public function store(ProjectReq $request,$id){
       $randomprojectID=rand();
       $todayDate=date("Y-m-d");
       while(ProjectModel::where('project_id',$randomprojectID)->exists()){
            $randomprojectID=rand();
       }
        $other= $request->all();
        $project=new ProjectModel;
        $project->user_id=$id;
        $project->client_name=$request->input('client_name');
        $project->client_phone=$request->input('client_phone');
        $project->client_address=$request->input('client_address');
        $project->project_id=   $randomprojectID;
        $project->project_name=$request->input('project_name');
        $project->project_address=$request->input('project_address');
        $project->project_budgect=$request->input('project_budgect');
        $project->creating_date=$todayDate;
        $project->starting_date=$request->input('starting_date');
        $project->ending_date=$todayDate;
        $project->target_time=$request->input('target_time');
        $project->project_status=$request->input('project_status');
        if( $project->save()){
            Session::flash('success','Data Update sucess');
       }
        else{
           Session::flash('success','Data Not Update');
        }
        
       return  redirect()->to('/project/'.$id);
    }
    public function updateprojectstatus(ProjectReq $request)
    {
      
        $todayDate=date("Y-m-d");
        ProjectModel::where('user_id', $request->input('user_id'))->where('project_id', $request->input('project_id'))
                ->update(array(
                    'project_status'=>$request->input('project_status'),
                    'ending_date'=>$todayDate
                    ));

         
        return  redirect()->to('/project/'.$request->input('user_id'));
    }

    public function projectdeshboard($id,$projectID){
        $this->data['projects']=ProjectModel::where('user_id',$id)->where('project_id',$projectID)->get();
        $projects=ProjectTaskModel::where('user_id',$id)->where('project_id',$projectID)->get();
        $this->data['alltask']=sizeof($projects);

        $taskcost=ProjectTaskCostModel::where('user_id',$id)->where('project_id',$projectID)->get();
        $this->data['taskcost']= $taskcost;

        $taskinstitumentcost=TaskInstitumentModel::where('user_id',$id)->where('project_id',$projectID)->get();
        $this->data['taskinstitumentcost']= $taskinstitumentcost;

        $alltem=CreateTeamModel::where('user_id',$id)->where('project_id',$projectID)->get();
        $this->data['allteam']=sizeof($alltem);

        $teamcost=TeamCostModel::where('user_id',$id)->where('project_id',$projectID)->get();
        $this->data['teamcost']=$teamcost;

        $projectcost=ProjectCostMode::where('user_id',$id)->where('project_id',$projectID)->get();
        $this->data['projectcost']=$projectcost;

        $this->data['project_id']=$projectID;
        $this->data['user_id']=$id;
        return view('project/dashbord',$this->data);
    }
}
