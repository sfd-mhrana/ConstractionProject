@extends('layout.mainlayout')

@section('page_body')
<nav class="mb-4 navbar navbar-expand-lg navbar-dark cyan">
      <a class="navbar-brand font-bold" href="{{url('project/'.$user_id)}}">Constraction Managment</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSuapportedContent-4">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><i class="fa fa-tasks"></i> Projects Section </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="{{url('project/projectfrom/'.$user_id)}}"><i class="fa fa-plus"></i> Create New Project </a>
              <a class="dropdown-item" href="{{url('project/'.$user_id)}}"><i class="fa fa-list"></i> Projects List </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Employee Section </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="{{url('employee/employeefrom/'.$user_id)}}"><i class="fa fa-plus"></i> Create Employee</a>
              <a class="dropdown-item" href="{{url('employee/'.$user_id)}}"><i class="fa fa-list"></i> Employee List</a>
              <a class="dropdown-item" href="#"><i class="fa fa-money"></i> Employee Account</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="#">My account</a>
              <a class="dropdown-item" href="#">Log out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    @yield('main_page_body')
@stop