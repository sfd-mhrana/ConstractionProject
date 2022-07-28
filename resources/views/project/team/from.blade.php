@extends('layout.projectlayout')

@section('page_body')
<div class="container">
    <div class="p-5 text-center bg-light">
        <a class="btn btn-primary" style="float:left;" href="{{url('project/deshboard/'.$user_id.'/'.$project_id)}}">Back</a>
        <h2 class="mb-3">Create a new Team Under ' <strong style="color: red;">{{$projects[0]->project_name}}</strong> ' Project</h2>
    </div>
    <div style="margin: 100px;">

        {!! Form::open(['url' => 'project/storeteam/'.$user_id.'/'.$project_id,'method' => 'post']) !!}
        <div class="form-row">
            <div class="col-md-3"> </div>
            <div class="col-md-6">
                <div class="form-group">
                    {{Form::text('team_name',NULL,['class' => 'form-control','id'=>'team_name','placeholder'=>'Enter Team Name'])}}
                </div>
                <div class="form-group">
                    {{Form::text('team_member',NULL,['class' => 'form-control','id'=>'team_member','placeholder'=>'Enter Team Member Quantaty'])}}
                </div>
                <div class="form-group">
                    {{Form::date('creating_date',NULL,['class' => 'form-control','id'=>'creating_date','placeholder'=>'Creating Date'])}}
                </div>
                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>

            </div>
            <div class="col-md-3"> </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@stop