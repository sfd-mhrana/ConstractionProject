<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskDistributionReq;
use App\Models\TaskDistributionMod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskDistributionCon extends Controller
{
    public function store(TaskDistributionReq $request, $id, $projectId)
    {

        $other = $request->all();
        if (TaskDistributionMod::where('user_id', $id)->where('project_id', $projectId)->where('task_id', $request->input('task_id'))
            ->where('team_id', $request->input('team_id'))->exists()
        ) {
        } else {
            $project = new TaskDistributionMod();
            $project->user_id = $id;
            $project->project_id = $projectId;
            $project->task_id = $request->input('task_id');
            $project->team_id = $request->input('team_id');
            if ($project->save()) {
                Session::flash('success', 'Data Update sucess');
            } else {
                Session::flash('success', 'Data Not Update');
            }
        }

        return  redirect()->to('/project/taskdistribution/' . $id . '/' . $projectId);
    }
}
