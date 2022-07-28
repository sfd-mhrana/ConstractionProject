@extends('layout.projectlayout')

@section('page_body')

<div class="container" style="margin-bottom: 50px;">
    <div class="row" style="margin-top:50px;">
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header white">
                    <p class="text-uppercase small mb-2"> Total Task</p>
                    <h5 class="font-weight-bold mb-0">
                        {{$alltask}} Task
                    </h5>
                </div>
                <div class="card-footer white">
                    <a href="{{url('project/tasklist/'.$user_id.'/'.$project_id)}}">
                        <button type="button" class="btn btn-primary btn-sm">View List</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header white">
                    <p class="text-uppercase small mb-2">Task Total Cost</p>
                    <h5 class="font-weight-bold mb-0">
                        {{$taskcost->sum('amount')}} Taka
                    </h5>
                </div>
                <div class="card-footer white">
                    <a href="{{url('project/taskcost/'.$user_id.'/'.$project_id)}}">
                        <button type="button" class="btn btn-primary btn-sm">View List</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header white">
                    <p class="text-uppercase small mb-2">Total Task Institument Cost</p>
                    <h5 class="font-weight-bold mb-0">
                        {{$taskinstitumentcost->sum('amount')}} Taka
                    </h5>
                </div>
                <div class="card-footer white">
                    <a href="{{url('project/institumentcost/'.$user_id.'/'.$project_id)}}">
                        <button type="button" class="btn btn-primary btn-sm">View List</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header white">
                    <p class="text-uppercase small mb-2">Task Distribution</p>
                    <h5 class="font-weight-bold mb-0">
                        Click View List 
                    </h5>
                </div>
                <div class="card-footer white">
                    <a href="{{url('project/taskdistribution/'.$user_id.'/'.$project_id)}}">
                        <button type="button" class="btn btn-primary btn-sm">View List</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header white">
                    <p class="text-uppercase small mb-2"> Total Team</p>
                    <h5 class="font-weight-bold mb-0">
                        {{$allteam}} Team
                    </h5>
                </div>
                <div class="card-footer white">
                    <a href="{{url('project/teamlist/'.$user_id.'/'.$project_id)}}">
                        <button type="button" class="btn btn-primary btn-sm">View List</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header white">
                    <p class="text-uppercase small mb-2"> All Team Cost</p>
                    <h5 class="font-weight-bold mb-0">
                    {{$teamcost->sum('amount')}} Taka
                    </h5>
                </div>
                <div class="card-footer white">
                    <a href="{{url('project/teamcost/'.$user_id.'/'.$project_id)}}">
                        <button type="button" class="btn btn-primary btn-sm">View List</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header white">
                    <p class="text-uppercase small mb-2">Simple Estamiting</p>
                    <h5 class="font-weight-bold mb-0">
                        Click View List
                    </h5>
                </div>
                <div class="card-footer white">
                    <a href="{{url('project/simpleestamite/'.$user_id.'/'.$project_id)}}">
                        <button type="button" class="btn btn-primary btn-sm">View List</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header white">
                    <p class="text-uppercase small mb-2">Cost</p>
                    <h5 class="font-weight-bold mb-0">
                    {{$projectcost->sum('amount')}} Taka
                    </h5>
                </div>
                <div class="card-footer white">
                    <a href="{{url('project/projectcost/'.$user_id.'/'.$project_id)}}">
                        <button type="button" class="btn btn-primary btn-sm">View List</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop