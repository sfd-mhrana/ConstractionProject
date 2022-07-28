<?php

namespace App\Http\Controllers;

use App\Http\Requests\SimpleEstimateReq;
use App\Models\ProjectModel;
use App\Models\SimpleEstimitingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SimpleEstimitingCon extends Controller
{
    public function index($id, $projectId)
    {
        
        $this->data['projects'] = ProjectModel::where('user_id', $id)->where('project_id', $projectId)->get();
        
        $this->data['simpleestamite'] = SimpleEstimitingModel::where('user_id', $id)->where('project_id', $projectId)->get();
        
        $this->data['user_id'] = $id;
        $this->data['project_id'] = $projectId;
        return view('project/simpleestamiting', $this->data);

    }
    public function store(SimpleEstimateReq $request, $id, $projectId)
    {

        $other = $request->all();
        if (SimpleEstimitingModel::where('user_id', $id)->where('project_id', $projectId)->where('name', $request->input('name'))->exists()
        ) {
        } else {
            $project = new SimpleEstimitingModel();
            $project->user_id = $id;
            $project->project_id = $projectId;
            $project->name = $request->input('name');
            $project->quantaty = $request->input('quantaty');
            if ($project->save()) {
                Session::flash('success', 'Data Update sucess');
            } else {
                Session::flash('success', 'Data Not Update');
            }
        }

        return  redirect()->to('/project/simpleestamite/' . $id . '/' . $projectId);
    }
}
