<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title : auth()->user()->roles[0]->display_name." Dashboard" }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-background-color="black" data-active-color="info">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        {{ auth()->user()->name }}
                    </a>
                </div>

                <ul class="nav">
                    <li id="dashboard">
                        @role('client')
                            <a href="{{ url('client') }}">
                                <i class="ti-pie-chart"></i>
                                <p>Dashboard</p>
                            </a>
                        @endrole
                        @role('publisher')
                            <a href="{{ url('publisher') }}">
                                <i class="ti-pie-chart"></i>
                                <p>Dashboard</p>
                            </a>
                        @endrole
                    </li>
                    @role('client')
                        <li id="companies">
                            <a href="{{ url('client/companies') }}">
                                <i class="fa fa-building-o"></i>
                                <p>Companies</p>
                            </a>
                        </li>
                        <li id="publications">
                            <a href="{{ url('client/publications') }}">
                                <i class="ti-medall-alt"></i>
                                <p>Publications</p>
                            </a>
                        </li>
                    @endrole
                    @role('publisher')
                        <li id="tasks">
                            <a href="{{ route('publisher.tasks') }}">
                                <i class="fa fa-tasks"></i>
                                <p>Tasks</p>
                            </a>
                        </li>
                        <li id="publications">
                            <a href="{{ url('publisher/publications') }}">
                                <i class="ti-layout-grid2"></i>
                                <p>My Publications</p>
                            </a>
                        </li>
                    @endrole
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">Digital Ambassadors</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p>Stats</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-bell"></i>
                                        <p class="notification">5</p>
                                        <p>Notifications</p>
                                        <b class="caret"></b>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li>
                                  </ul>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}">
                                    <i class="fa fa-sign-out"></i>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    @include('flash::message')
                    @yield('body')
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy; 2018 <a href="http://dgambassadors.com">Digital Ambassadors</a> | All Rights Reserved
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <!-- JQuery -->
    <script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>

    <!--   Core JS Files   -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="{{ asset('js/paper-dashboard.js') }}"></script>

    @yield('script')

    <script>
        $('#flash-overlay-modal').modal();
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

</body>

</html>
