@extends('layout.projectlayout')

@section('page_body')
<div class="container">
  <div class="p-5 text-center bg-light">
    <h2 class="mb-3">All Task List Under ' <strong style="color: red;">{{$projects[0]->project_name}}</strong> ' Project</h2>
  </div>

  <div class="page-header">
    <div style="width: 50%; float: left; padding: 20px;">
          From : <input style="width: 30%;" type="date">
    </div>
    <div style="width: 50%; float: left; padding: 20px;">
          To : <input style="width: 30%;" type="date">
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Project Name</th>
        <th scope="col">Task Name</th>
        <th scope="col">Task Budgect</th>
        <th scope="col">Starting Date</th>
        <th scope="col">Comments</th>
        <th scope="col">Task Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $key=>$task)
      <tr>
        <td scope="col">{{$key+1}}</td>
        <td>{{$projects[0]->project_name}}</td>
        <td>{{$task->task_name}}</td>
        <td>{{$task->task_budgect}}</td>
        <td>{{$task->start_date}}</td>
        <td>{{$task->comments}}</td>
        <td>{{$task->task_status}}</td>
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