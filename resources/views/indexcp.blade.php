<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DigiSay</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('adminp/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{URL::to('adminp/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::to('adminp/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{URL::to('adminp/vendor/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{URL::to('adminp/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- styles for datepicker -->
    <style>
        .table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
            background-color: transparent;
        }
    </style>
    <style>
        button > i,a{color:#767676}
        th.prev, th.next {background: transparent;}
    </style>
    <style>
        .table-responsive{
            height: 400px;
            width: 100%;
            display: block;
            overflow-x: scroll;
            overflow-y: scroll;
        }
    </style>
    <style>
        @media (min-width: 768px) {
            .sidebar {
                width: 220px;
            }
            #page-wrapper{
                margin-left:220px;
            }
        }
    </style>
    <style>
        .nav>li>a {padding: 2px 15px;}
    </style>
    {{--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>--}}
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="color:#973e41;font-size: x-large;" class="navbar-brand" href="{{URL::to('/')}}">
                    <b>
                        <span>
                            &nbsp;&nbsp;&nbsp;
                            DigiSay Task
                        </span>

                    </b>
                </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li>
                            <a><i class="fa fa-user fa-fw"></i> {{--{{$admin->a_name}}--}}</a>
                        </li>

                        <li><a href="{{URL::to('/changeLanguae')}}"><i class="fa fa-gear fa-fw"></i> Arabic</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::to('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <form method="get" action="{{url('/searchResult')}}">
                                {{csrf_field()}}
                                <div class="input-group custom-search-form">
                                    <input type="text" name="s" id="myInput" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </span>
                                </div>
                            </form>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{URL::to('/')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Clients<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('all/clients')}}">All Clients</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('add/client')}}">Add New Client</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Services<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('all/services')}}">All Services</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('add/service')}}">Add New Service</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        @yield('content')

        @yield('add_client')
        @yield('edit_client')
        @yield('all_clients')

        @yield('add_service')
        @yield('edit_service')
        @yield('all_services')

        @yield('clientservices')

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{URL::to('adminp/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::to('adminp/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::to('adminp/vendor/metisMenu/metisMenu.min.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{URL::to('adminp/vendor/raphael/raphael.min.js')}}"></script>
    {{--<script src="{{URL::to('adminp/vendor/morrisjs/morris.min.js')}}"></script>--}}
    {{--<script src="{{URL::to('adminp/data/morris-data.js')}}"></script>--}}
    <!-- Custom Theme JavaScript -->
    <script src="{{URL::to('adminp/dist/js/sb-admin-2.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script type="text/javascript">
        $(document).on('click','#deletes',function (e) {
            e.preventDefault();
            var link = $(this).attr('href');
            bootbox.confirm(' Are you  sure to delete this record ?'  ,function (confirmed) {
                if(confirmed) {
                    window.location.href = link;
                }
            });
        });
    </script>
    <!-- **************** -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script>
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        $(function () {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true,
                format : 'yyyy-mm-dd',
                startDate: today
            }).datepicker('update');
        });
        $(function () {
            $("#datepicker2").datepicker({
                autoclose: true,
                todayHighlight: true,
                format : 'yyyy-mm-dd',
                startDate: today
            }).datepicker('update');
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</body>
</html>