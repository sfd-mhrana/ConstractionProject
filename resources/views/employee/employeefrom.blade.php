@extends('layout.mainlayoutnav')

@section('main_page_body')
<script src="{{ asset('js/employeefrom.js')}}"></script>

<div class="container">
    <div class="p-5 text-center bg-light">
        <a class="btn btn-primary" style="float:left;" href="{{url('employee/'.$user_id)}}">Back</a>
        <h1 class="mb-3">Create a new Employee</h1>
    </div>
    <div style="margin: 100px;">
        {!! Form::open(['url' => 'employee/createemployee/'.$user_id,'method' => 'post','files'=>true]) !!}
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::text('NAME',NULL,['class' => 'form-control','id'=>'NAME','placeholder'=>'Enter Employee Name'])}}

            </div>
            <div class="form-group col-md-6">
                {{Form::email('email',NULL,['class' => 'form-control','id'=>'email','placeholder'=>'Enter Employee Email'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::text('address',NULL,['class' => 'form-control','id'=>'address','placeholder'=>'Enter Employee Address'])}}

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{Form::number('phone',NULL,['class' => 'form-control','id'=>'phone','placeholder'=>'Enter Employee Phone'])}}
            </div>
            <div class="form-group col-md-6">
                {{Form::select('position', [
                    'Manager'=>'Manager',
                    'Position 2'=>'Position 2',
                    'Position 3'=>'Position 3'],NULL,['class' => 'form-control','id'=>'position','placeholder'=>'Select Project Status'])}}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                {{Form::number('basic_salary',NULL,['class' => 'form-control','id'=>'basic_salary','placeholder'=>'Enter Employee Basic Salary'])}}
            </div>
            <div class="form-group col-md-4">
            <!-- {!! Form::file( 'image', array('class' => 'form-control','id'=>'image','placeholder'=>'Select Image') ) !!} -->
                {{Form::file('image',['id'=>'image','placeholder'=>'Select Image'])}}
            </div>
            <div class="form-group col-md-4">
                    <img src="" id="output" height="100px" width="100px" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
        {!! Form::close() !!}
    </div>
</div>
@stop