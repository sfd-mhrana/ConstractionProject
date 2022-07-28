@extends('layout.projectlayout')

@section('page_body')
<div class="container">
  <div class="p-5 text-center bg-light">
    <h2 class="mb-3">All Team List Under ' <strong style="color: red;">{{$projects[0]->project_name}}</strong> ' Project</h2>
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
        <th scope="col">Team Name</th>
        <th scope="col">Team Members</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($teams as $team)
      <tr>
        <td scope="col">#</td>
        <td>{{$projects[0]->project_name}}</td>
        <td>{{$team->team_name}}</td>
        <td>{{$team->team_member}}</td>
        <td>{{$team->creating_date}}</td>
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