@extends('layout.projectlayout')

@section('page_body')

<div class="container">
    <div class="p-5 text-center bg-light">
        <h2 class="mb-3">Team Member Section</h2>
    </div> 
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4">
            {!! Form::open(['url' => 'project/taskdistribution/'.$user_id.'/'.$project_id, 'method' => 'post']) !!}
            <div class="form-group">
                {{Form::select('task_id',$task ,NULL,['class' => 'form-control','id'=>'task_id','placeholder'=>'Select Task'])}}
            </div> 
            <div class="form-group">
                {{Form::select('team_id',$team ,NULL,['class' => 'form-control','id'=>'team_id','placeholder'=>'Select Team'])}}
            </div>
           
            <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
            {!! Form::close() !!}
        </div>
        <div class="col-md-8">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Task Name</th>
                        <th scope="col">Team Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($taskdistribution as $teammember)
                    <tr>
                        <td scope="col">#</td>
                        <td>{{$projects[0]->project_name}}</td>
                        <td>{{$teammember->tasks->task_name}}</td>
                        <td>{{$teammember->team->team_name}}</td>
                        <td>
                            <div>
                                <a class="btn btn-primary btn-sm " style="float: left; width: 45%; margin-left: 10;" href="#">
                                    <i class="fa fa-edit" style="align-items: center;"></i>
                                </a>
                                <a class="btn btn-primary btn-sm " style="float: right; width: 45%;" href="#">
                                    <i class="fa fa-trash" style="text-align: center; margin-right: 10;"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>








@stop