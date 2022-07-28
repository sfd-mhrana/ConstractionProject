@extends('layout.projectlayout')

@section('page_body')

<div class="container">
    <div class="p-5 text-center bg-light">
        <h2 class="mb-3">Estamiting Section</h2>
    </div> 
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4">
            {!! Form::open(['url' => 'project/simpleestamite/'.$user_id.'/'.$project_id, 'method' => 'post']) !!}
            <div class="form-group">
                {{Form::text('name',NULL,['class' => 'form-control','id'=>'name','placeholder'=>'Enter Institument Name'])}}
            </div> 
            <div class="form-group">
                {{Form::number('quantaty',NULL,['class' => 'form-control','id'=>'quantaty','placeholder'=>'Enter Institument Quantaty'])}}
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
                        <th scope="col">Institument Name</th>
                        <th scope="col">Institument Quantaty</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($simpleestamite as $teammember)
                    <tr>
                        <td scope="col">#</td>
                        <td>{{$projects[0]->project_name}}</td>
                        <td>{{$teammember->name}}</td>
                        <td>{{$teammember->quantaty}}</td>
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