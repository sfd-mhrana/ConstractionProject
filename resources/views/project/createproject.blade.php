@extends('layout.mainlayoutnav')

@section('main_page_body')
<div class="container">
    <div class="p-5 text-center bg-light">
        <a class="btn btn-primary" style="float:left;" href="{{url('project/'.$user_id)}}">Back</a>
        <h1 class="mb-3">Create a new Project</h1>
    </div>
    <div style="margin: 100px;">

        {!! Form::open(['url' => 'project/createproject/'.$user_id,'method' => 'post']) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::text('client_name',NULL,['class' => 'form-control','id'=>'client_name','placeholder'=>'Enter Client Name'])}}

            </div>
            <div class="form-group col-md-6">
                {{Form::number('client_phone',NULL,['class' => 'form-control','id'=>'client_phone','placeholder'=>'Enter Client Phone'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::text('client_address',NULL,['class' => 'form-control','id'=>'client_address','placeholder'=>'Enter Client Addredd'])}}

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::text('project_name',NULL,['class' => 'form-control','id'=>'project_name','placeholder'=>'Enter Project Name'])}}
            </div>
            <div class="form-group col-md-6">
                {{Form::text('project_budgect',NULL,['class' => 'form-control','id'=>'project_budgect','placeholder'=>'Enter Project Budgect'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::text('project_address',NULL,['class' => 'form-control','id'=>'project_address','placeholder'=>'Enter Project Address'])}}
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{Form::date('starting_date',NULL,['class' => 'form-control','id'=>'starting_date','placeholder'=>'Select Starting Date'])}}
            </div>
            <div class="form-group col-md-4">
                {{Form::number('target_time',NULL,['class' => 'form-control','id'=>'target_time','placeholder'=>'Target Time In Day'] )}}
            </div>
            <div class="form-group col-md-4">
                {{Form::select('project_status', ['Not Started'=>'Not Started',
                    'In Progress'=>'In Progress',
                    'Complete'=>'Complete',
                    'On Hold'=>'On Hold',
                    'Overdue'=>'Overdue',
                    'Needs Review'=>'Needs Review'],NULL,['class' => 'form-control','id'=>'project_status','placeholder'=>'Select Project Status'])}}
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
        {!! Form::close() !!}
    </div>
</div>

@stop