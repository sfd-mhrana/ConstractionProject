@extends('layout.projectlayout')

@section('page_body')

<div class="container">
    <div class="p-5 text-center bg-light">
        <h2 class="mb-3">Costing Details of ' <strong style="color: red;">{{$projects[0]->project_name}}</strong> ' Project</h2>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4">
            {!! Form::open(['url' => 'project/projectcost/'.$user_id.'/'.$project_id,'method' => 'post']) !!}
           
            <div class="form-group">
                {{Form::text('details',NULL,['class' => 'form-control','id'=>'details','placeholder'=>'Enter Details'])}}
            </div>
            <div class="form-group">
                {{Form::date('date',NULL,['class' => 'form-control','id'=>'date','placeholder'=>'Select Starting Date'])}}
            </div>
            <div class="form-group">
                {{Form::number('amount',NULL,['class' => 'form-control','id'=>'amount','placeholder'=>'Amount'])}}
            </div>

            <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
            {!! Form::close() !!}
        </div>
        <div class="col-md-8">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Details</th>
                        <th scope="col">Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projectcost as $taskcost)
                    <tr>
                        <td scope="col">#</td>
                        <td>{{$taskcost->details}}</td>
                        <td>{{$taskcost->date}}</td>
                        <td>{{$taskcost->amount}}</td>
                        <td>{{$taskcost->status}}</td>
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