<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Absensi</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/morris.js/morris.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/switch.css')}}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="" class="logo">
                <span class="logo-mini"><b>A</b>BS</span>
                <span class="logo-lg"><b>ABSENSI</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="/logout" class="btn btn-default btn-flat">Log out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p> {{ Auth::user()->name }}</p>
                        <a href=""><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU</li>
                    @if(Auth::user()->role == "admin")
                    <li>
                        <a href="/users">
                            <i class="fa fa-user"></i> <span>Users</span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="/attendance">
                            <i class="fa fa-calendar-o"></i> <span>Attendance</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 Absensi
        </footer>

        <div class="control-sidebar-bg"></div>
    </div>

    <script src="{{asset('AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}">
    </script>
    <script src="{{asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('AdminLTE/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#user').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
</body>
</html>
