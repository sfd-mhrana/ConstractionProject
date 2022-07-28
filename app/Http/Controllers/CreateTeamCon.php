<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamReq;
use App\Models\CreateTeamModel;
use App\Models\EmployeeModel;
use App\Models\ProjectModel;
use App\Models\ProjectTaskModel;
use App\Models\SimpleEstimitingModel;
use App\Models\TaskDistributionMod;
use App\Models\TeamCostModel;
use App\Models\TeamMemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CreateTeamCon extends Controller
{


    public function index($id, $projectId)
    {
        $this->data['projects'] = ProjectModel::where('user_id', $id)->where('project_id', $projectId)->get();
        $this->data['teams'] = CreateTeamModel::where('user_id', $id)->where('project_id', $projectId)->get();
        $this->data['user_id'] = $id;
        $this->data['project_id'] = $projectId;
        return view('project/team/index', $this->data);
    }

    public function create($id, $projectId)
    {
        $this->data['projects'] = ProjectModel::where('user_id', $id)->where('project_id', $projectId)->get();
        $this->data['teams'] = CreateTeamModel::where('user_id', $id)->where('project_id', $projectId)->get();
        $this->data['user_id'] = $id;
        $this->data['project_id'] = $projectId;
        return view('project/team/from', $this->data);
    }

    public function store(CreateTeamReq $request, $id, $projectId)
    {
        $randomprojectID = rand();
        $todayDate = date("Y-m-d");
        while (CreateTeamModel::where('team_id', $randomprojectID)->exists()) {
            $randomprojectID = rand();
        }
        if (CreateTeamModel::where('user_id', $id)->where('project_id', $projectId)->where('team_name', $request->input('team_name'))->exists()) {
        } else {
        }
        $other = $request->all();
        $project = new CreateTeamModel;
        $project->user_id = $id;
        $project->project_id = $projectId;
        $project->team_id = $randomprojectID;
        $project->team_name = $request->input('team_name');
        $project->team_member = $request->input('team_member');
        $project->creating_date = $request->input('creating_date');
        if ($project->save()) {
            Session::flash('success', 'Data Update sucess');
        } else {
            Session::flash('success', 'Data Not Update');
        }
        return  redirect()->to('/project/teamlist/' . $id . '/' . $projectId);
    }

    public function teammembers($id, $projectId)
    {
        
        $this->data['projects'] = ProjectModel::where('user_id', $id)->where('project_id', $projectId)->get();
        
        $this->data['teammembers'] = TeamMemberModel::where('user_id', $id)->where('project_id', $projectId)->get();

        $teams = CreateTeamModel::where('user_id', $id)->where('project_id', $projectId)->get();

       
        $this->data['teams'] = $teams;
        if(sizeof($teams)>0){
            foreach ($teams as $team) {
                $this->data['team'][$team->team_id] = $team->team_name;
            } 
        }
        else{
            $this->data['team']['No Data Found']="No Data Found";
        }

        $employees = EmployeeModel::where('user_id', $id)->get();
        

        if(sizeof($employees)>0){
            foreach ($employees as $employee) {
                $this->data['employee'][$employee->id] = $employee->name;
            } 
        }
        else{
            $this->data['employee']['No Data Found']="No Data Found";
        }


        $this->data['user_id'] = $id;
        $this->data['project_id'] = $projectId;
        return view('project/team/teammember', $this->data);

    }
    public function teamcosting($id, $projectId)
    {
        
        $this->data['projects'] = ProjectModel::where('user_id', $id)->where('project_id', $projectId)->get();
        
        $this->data['teamcost'] = TeamCostModel::where('user_id', $id)->where('project_id', $projectId)->get();

        $teams = CreateTeamModel::where('user_id', $id)->where('project_id', $projectId)->get();

       
        $this->data['teams'] = $teams;
        if(sizeof($teams)>0){
            foreach ($teams as $team) {
                $this->data['team'][$team->team_id] = $team->team_name;
            } 
        }
        else{
            $this->data['team']['No Data Found']="No Data Found";
        }
        $this->data['user_id'] = $id;
        $this->data['project_id'] = $projectId;
        return view('project/team/teamcost', $this->data);

    }
    public function taskdistribution($id, $projectId)
    {
        
        $this->data['projects'] = ProjectModel::where('user_id', $id)->where('project_id', $projectId)->get();
        
        $this->data['taskdistribution'] = TaskDistributionMod::where('user_id', $id)->where('project_id', $projectId)->get();

        $teams = CreateTeamModel::where('user_id', $id)->where('project_id', $projectId)->get();
        $this->data['teams'] = $teams;
        
        if(sizeof($teams)>0){
            foreach ($teams as $team) {
                $this->data['team'][$team->team_id] = $team->team_name;
            } 
        }
        else{
            $this->data['team']['No Data Found']="No Data Found";
        }



        $tasks = ProjectTaskModel::where('user_id', $id)->where('project_id', $projectId)->get();
        $this->data['tasks'] = $teams;
        if(sizeof($tasks)>0){
            foreach($tasks as $task){
            $this->data['task'][$task->task_id]=$task->task_name;
        }
        }else{
            $this->data['task']['No Data Found']="No Data Found";
        } 
        $this->data['user_id'] = $id;
        $this->data['project_id'] = $projectId;
        return view('project/taskdistribution', $this->data);

    }

   
}
