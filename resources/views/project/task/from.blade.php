@extends('layout.projectlayout')

@section('page_body')
<div class="container">
    <div class="p-5 text-center bg-light">
        <a class="btn btn-primary" style="float:left;" href="{{url('project/deshboard/'.$user_id.'/'.$project_id)}}">Back</a>
        <h2 class="mb-3">Create a new Task Under ' <strong style="color: red;">{{$projects[0]->project_name}}</strong> ' Project</h2>
    </div>
    <div style="margin: 100px;">

        {!! Form::open(['url' => 'project/storetask/'.$user_id.'/'.$project_id,'method' => 'post']) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::text('task_name',NULL,['class' => 'form-control','id'=>'task_name','placeholder'=>'Enter Task Name'])}}

            </div>
            <div class="form-group col-md-6">
                {{Form::number('task_budgect',NULL,['class' => 'form-control','id'=>'task_budgect','placeholder'=>'Enter Task Budgect'])}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::date('start_date',NULL,['class' => 'form-control','id'=>'start_date','placeholder'=>'Select Starting Date'])}}
            </div>
            <div class="form-group col-md-6">
                {{Form::select('task_status', ['Not Started'=>'Not Started',
                    'In Progress'=>'In Progress',
                    'Complete'=>'Complete',
                    'On Hold'=>'On Hold',
                    'Overdue'=>'Overdue',
                    'Needs Review'=>'Needs Review'],NULL,['class' => 'form-control','id'=>'task_status','placeholder'=>'Select Project Status'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::text('comments',NULL,['class' => 'form-control','id'=>'comments','placeholder'=>'Enter Task Comments'])}}
        </div>

        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
        {!! Form::close() !!}
    </div>
</div>

@stop