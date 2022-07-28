<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project_CostReq;
use App\Models\ProjectCostMode;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectCostCon extends Controller
{
  
    public function index($id, $projectId)
    {
         
        $this->data['projects'] = ProjectModel::where('user_id', $id)->where('project_id', $projectId)->get();
        
        $this->data['projectcost'] = ProjectCostMode::where('user_id', $id)->where('project_id', $projectId)->get();
        
        $this->data['user_id'] = $id;
        $this->data['project_id'] = $projectId;
        return view('project/projectcost', $this->data);

    }
    public function store(Project_CostReq $request, $id, $projectId)
    {

        $other = $request->all();
        
            $project = new ProjectCostMode();
            $project->user_id = $id;
            $project->project_id = $projectId;
            $project->details = $request->input('details');
            $project->amount = $request->input('amount');
            $project->date = $request->input('date');
            $project->status = 'Project Cost';
            if ($project->save()) {
                Session::flash('success', 'Data Update sucess');
            } else {
                Session::flash('success', 'Data Not Update');
            }
        

        return  redirect()->to('/project/projectcost/' . $id . '/' . $projectId);
    }
}
