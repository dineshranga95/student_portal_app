<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin" class="brand-link">
            <img src="../../dist/img/AdminLTELogo.png"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">janeesameera@gmail.com</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Add Details
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">3</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/add_student" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Student</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/add_teacher" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Teacher</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Classes</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                View Details
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">3</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/ViewAllStudent" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Students Details</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/ViewAllTeacher" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Teachers Details</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Class Details</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/calender" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Calendar
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Enter Student Details</h3>
            </div>
            <br>
            @if(!empty($errors->first()))
                <div class="row col-lg-12">
                    <div class="alert alert-danger">
                        <span>{{ $errors->first() }}</span>
                    </div>
                </div>
            @endif
            <script>
                var msg = '{{Session::get('alert')}}';
                var exist = '{{Session::has('alert')}}';
                if(exist){
                    swal("Done","Successfully Saved Student Details !","success");
                }
            </script>
            <form role="form" method="post" action="save_student">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" class="form-control" name="First_Name" value="{{ old('First_Name') }}" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="text" class="form-control" name="Last_Name" value="{{ old('Last_Name') }}"  placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">School Name</label>
                        <input type="text" class="form-control" name="School_Name" value="{{ old('School_Name') }}" placeholder="Enter School">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Grade</label>
                        <input type="text" class="form-control" name="Grade" value="{{ old('Grade') }}"  placeholder="Enter Grade">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email Address</label>
                        <input type="email" class="form-control" name="Email" value="{{ old('Email') }}" placeholder="Enter Email">
                    </div>
                </div>
                <!-- /.card-body -->
                <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
                <script>
                    $(document).ready(function () {
                        $('#main_login').click(function () {
                            var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
                            var string_length = 8;
                            var randomstring = '';
                            for (var i=0; i<string_length; i++) {
                                var rnum = Math.floor(Math.random() * chars.length);
                                randomstring += chars.substring(rnum,rnum+1);
                            }
                            $("#result").html(randomstring);
                        });
                    });
                </script>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <span id="result" style="color: red; margin-left: 10px;"></span>
                </div>
            </form>

        </div>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://optimizesolutions.lk" target="_blank" >Optimize Solutions</a>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
