@extends('layout.mainlayoutnav')

@section('main_page_body')
<div class="container">
<div class="p-5 text-center bg-light">
        <h2 class="mb-3">Employee List Page</h2>
    </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Image </th>
        <th scope="col"> Name</th>
        <th scope="col"> Eamil</th>
        <th scope="col"> Phone</th>
        <th scope="col"> Address</th>
        <th scope="col"> Position</th>
        <th scope="col"> Basic Salary</th>
        <th scope="col"> Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $key=>$employee)
      <tr>
        <td scope="col">{{$key+1}}</td>
        <td>
              <img src="http://127.0.0.1:8000/storage/employeeImage/{{$employee->image}}" id="output" height="50px" width="50px" />
        </td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->phone}}</td>
        <td>{{$employee->address}}</td>
        <td>{{$employee->position}}</td>
        <td>{{$employee->basic_salary}}</td>
        <td>
          <div>
            <a class="btn btn-primary btn-sm " style="float: left; width: 45%; margin-left: 10;" href="#">
              <i class="fa fa-edit" style="align-items: center;"></i>
            </a>
            <a class="btn btn-primary btn-sm " style="float: right; width: 45%;" href="#">
              <i class="fa fa-eye" style="text-align: center; margin-right: 10;"></i>
            </a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@stop