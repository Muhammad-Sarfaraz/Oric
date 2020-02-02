<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin Home</title>


  <link rel="stylesheet" href="http://127.0.0.1:3000/backend/plugins/fontawesome-free/css/all.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="http://127.0.0.1:3000/backend/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="http://127.0.0.1:3000/backend/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  
  
 <link rel="stylesheet" href="http://127.0.0.1:3000/css/app.css">

 <link href="http://127.0.0.1:3000/css/toastr.css" rel="stylesheet">

 <link href="http://127.0.0.1:3000/css/vendor.css?id=9681f7b105c94db4a1be" rel="stylesheet" type="text/css">
 </head>
<body>
  



<body class="hold-transition sidebar-mini layout-fixed">
  
<div class="wrapper">
<section class="container-fluid bg-white">

  <!-- Header -->
  <!-- Navbar -->
  <nav class="main-header navbar border navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->  <!-- Header -->


  <!-- side bar -->
  <!-- Main Sidebar Container -->
<aside class="main-sidebar  elevation-4 sidebar-light-success">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="http://127.0.0.1:3000/admin/home" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link  >
            <i class="fas fa-edit fa-lg"></i>
              <p>
               Student
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/student/create" class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Add Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/student"class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Student List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link  >
            <i class="fas fa-edit fa-lg"></i>
              <p>
               Teacher
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/teacher/create" class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/teacher"class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Teachers List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link  >
            <i class="fas fa-edit fa-lg"></i>
              <p>
              Employee
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/employee/create" class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Add Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/employee"class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Employee List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-school fa-lg"></i>
              <p>
                Academic
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-edit fa-lg"></i>
              <p>
                Attendance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Student-Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Empolyee-Attendance</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="http://127.0.0.1:3000/admin/notice" class="nav-link ">
            <i class="fas fa-person-booth fa-lg"></i>
              <p>
                Noticeboard
                
              </p>
            </a>
          </li>


          </ui>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-user-secret fa-lg"></i>
              <p>
                Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/management/library" class="nav-link">
                <i class="fas fa-user-lock"></i>
                  <p>Libary Managment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/management/phonebook" class="nav-link">
                <i class="fas fa-user-shield "></i>
                  <p>PhoneBook</p>
                </a>
              </li>
              
</ul>












          </ui>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-user-secret fa-lg"></i>
              <p>
                Administrator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-user-lock"></i>
                  <p>System Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-user-shield "></i>
                  <p>User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-user-shield "></i>
                  <p>Role</p>
                </a>
              </li>
</ul>









          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-tools fa-lg"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-copy"></i>
                  <p>Pages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/setting/backup" class="nav-link">
                <i class="fas fa-database"></i>
                  <p>Backup</p>
                </a>
              </li>
              
</ul>
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-file-alt"></i>
              <p>
                Site
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/gallery/view" class="nav-link">
                <i class="fas fa-photo-video"></i>
                  <p>Gallery</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/admin/slider" class="nav-link">
                  <i class="fas fa-copy"></i>
                  <p>Slider</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-copy"></i>
                  <p>Pages</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-user-friends"></i>
                  <p>Visitor</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-poll"></i>
                  <p>Statistic</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-comment-alt"></i>
                  <p>Feedback</p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="http://127.0.0.1:3000/admin/home/site_boost" class="nav-link">
                <i class="fas fa-charging-station"></i>
                  <p>Site Boost</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-comment-alt"></i>
                  <p>Upload Manager</p>
                </a>
              </li>
</ul>
<li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-users fa-lg"></i>
              <p>
               Reports
                
              </p>
            </a>
          </li>

          <li class="nav-item">
           
            
            <a class="nav-link" href="http://127.0.0.1:3000/logout"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off red"></i>
                    <p>
                        Logout
                    </p>
                 </a>

             <form id="logout-form" action="http://127.0.0.1:3000/logout" method="POST" style="display: none;">
                 <input type="hidden" name="_token" value="AjlbCwK9PrTVwaXbBdnN3t6IrpIDzv0TCU20Ay5K">             </form>
            </a>
          </li>
        </ul>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- side bar -->


  <div class="content-wrapper">
  <section class="container-fluid bg-white">
  <!-- BEGIN -->
   
<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Connect your settings</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your database details below</h6>
										</div>	
										<div class="form-wrap">
											<form action="database_backup.php" method="post" id="">
												<input type="hidden" name="_token" value="AjlbCwK9PrTVwaXbBdnN3t6IrpIDzv0TCU20Ay5K">												<div class="form-group">
													<label class="control-label mb-10" >Host</label>
													<input type="text" class="form-control" placeholder="Enter Server Name EX: Localhost" name="server" id="server" required="" autocomplete="on">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" >Database Username</label>
													<input type="text" class="form-control" placeholder="Enter Database Username EX: root" name="username" id="username" required="" autocomplete="on">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" >Database Password</label>
													<input type="password" class="form-control" placeholder="Enter Database Password" name="password" id="password" >
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10">Database Name</label>
													<input type="text" class="form-control" placeholder="Enter Database Name" name="dbname" id="dbname" required="" autocomplete="on">
												</div>
												<div class="form-group text-center">
													<button type="submit" name="backupnow" class="btn btn-info btn-rounded">Initiate Backup</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>











   <!-- END OF CONTENT-->
   </div>

         <!-- BEGIN -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      created_and_designed_by_sarfarz
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>      <!-- END OF FOOTER-->

      <div id ="app">
</div>

  


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="http://127.0.0.1:3000/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://127.0.0.1:3000/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://127.0.0.1:3000/backend/dist/js/adminlte.min.js"></script>

<script src="http://127.0.0.1:3000/backend/plugins/toastr/toastr.min.js"></script>







<script>
  </script>


</body>
</html>


