@extends('layout.mainlayoutnav')

@section('main_page_body')
<div class="container">
  <div class="p-5 text-center bg-light">
    <h2 class="mb-3">Projects List Page</h2>
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
        <th scope="col">Client Name</th>
        <th scope="col">Client Phone</th>
        <th scope="col">Client Address</th>
        <th scope="col">Project Name</th>
        <th scope="col">Project Budgect</th>
        <th scope="col">Project Address</th>
        <th scope="col">Starting Date</th>
        <th scope="col">Project Status</th>
        <th scope="col">Duration Time</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($projects as $key=>$project)
      <tr>
        <td scope="col">{{$key+1}}</td>
        <td>{{$project->client_name}}</td>
        <td>{{$project->client_phone}}</td>
        <td>{{$project->client_address}}</td>
        <td>{{$project->project_name}}</td>
        <td>{{$project->project_budgect}}</td>
        <td>{{$project->project_address}}</td>
        <td>{{$project->starting_date}}</td>
        <td style="cursor: pointer; color: red; width: 150px;">
          <select class="form-control inputstl" id="gender1" onchange="updateStatus(this.value, '{{$project->project_id}}','{{$user_id}}');">
            <option selected disabled>{{$project->project_status}}</option>
            <option>Not Started</option>
            <option>In Progress</option>
            <option>Complete</option>
            <option>On Hold</option>
            <option>Overdue</option>
            <option>Needs Review</option>
          </select>

        </td>

        <td>

          <?php

          $date1 = $project->starting_date;
          $date2 = $project->ending_date;

          $diff = abs(strtotime($date2) - strtotime($date1));

          $years = floor($diff / (365 * 60 * 60 * 24));
          $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
          $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

          if ($project->project_status != 'Complete') {
            echo " Complete Frist";
          } else {
            echo $days;
          }
          ?>
        </td>
        <td style="width: 140px;">
          <div>
            <a class="btn btn-primary btn-sm " style="width: 45%;" href="{{url('project/deshboard/'.$user_id.'/'.$project->project_id)}}">
              <i class="fa fa-eye" style="text-align: center; margin-right: 10;"></i>
            </a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
<script>
  function updateStatus(status, projectId, userid) {

    $.ajax({
      type: "POST",
      url: "{{route('updatestatus')}}",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {
        user_id: userid,
        project_id: projectId,
        project_status: status,
        _token: "{{csrf_token()}}"
      },
      dataType: "json"
    });
    location.reload();
  }
</script>
@stop