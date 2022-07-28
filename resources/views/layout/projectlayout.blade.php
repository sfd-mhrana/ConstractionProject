<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .navbar .dropdown .dropdown-menu a:hover {
            color: #572424 !important;
        }

        .darken-grey-text {
            color: #2E2E2E;
        }
    </style>
</head>

<body>
    <doctype html="">
 

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>


        <nav class="mb-4 navbar navbar-expand-lg navbar-dark cyan">
            <a class="navbar-brand font-bold" href="{{url('project/deshboard/'.$user_id.'/'.$project_id)}}">Constraction Managment</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSuapportedContent-4">
                <ul class="navbar-nav ml-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list"></i> Task Section </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="{{url('project/createtask/'.$user_id.'/'.$project_id)}}"><i class="fa fa-plus"></i> Create Tusk</a>
                            <a class="dropdown-item" href="{{url('project/tasklist/'.$user_id.'/'.$project_id)}}"><i class="fa fa-list"></i> Tusk List</a>
                            <a class="dropdown-item" href="{{url('project/taskcost/'.$user_id.'/'.$project_id)}}"><i class="fa fa-money"></i> Tusk Cost</a>
                            <a class="dropdown-item" href="{{url('project/institumentcost/'.$user_id.'/'.$project_id)}}"><i class="fa fa-money"></i> Institument Cost</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> Team Section</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="{{url('project/createteam/'.$user_id.'/'.$project_id)}}"><i class="fa fa-plus"></i> Create Team</a>
                            <a class="dropdown-item" href="{{url('project/teamlist/'.$user_id.'/'.$project_id)}}"><i class="fa fa-list"></i> Team List</a>
                            <a class="dropdown-item" href="{{url('project/teammembers/'.$user_id.'/'.$project_id)}}"><i class="fa fa-users"></i> Team Members</a>
                            <a class="dropdown-item" href="{{url('project/teamcost/'.$user_id.'/'.$project_id)}}"><i class="fa fa-money"></i> Team Cost</a>
                            <a class="dropdown-item" href="{{url('project/taskdistribution/'.$user_id.'/'.$project_id)}}"><i class="fa fa-cogs"></i> Task Distribution</a>
                        </div>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('project/simpleestamite/'.$user_id.'/'.$project_id)}}"><i class="fa fa-calculator"></i> Simple Estimate </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('project/projectcost/'.$user_id.'/'.$project_id)}}"><i class="fa fa-money"></i> Cost </a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-tasks"></i> 
                            {{$projects[0]->project_name}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="{{url('project/'.$user_id)}}"><i class="fa fa-tachometer"></i> Go To Dashboard</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('page_body')

    </doctype>
</body>

</html>