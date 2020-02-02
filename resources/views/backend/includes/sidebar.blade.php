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
            <a href="{{url('admin/home')}}" class="nav-link {{ Request::is('admin/home')? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ Request::is('admin/student')? 'active' : '' }} >
            
              <p>
               Student
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('student.create')}}" class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Add Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('student.index')}}"class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Student List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ Request::is('admin/teacher')? 'active' : '' }} >
            <i class="fas fa-edit fa-lg"></i>
              <p>
               Teacher
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('teacher.create')}}" class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('teacher.index')}}"class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Teachers List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ Request::is('admin/teacher')? 'active' : '' }} >
            <i class="fas fa-edit fa-lg"></i>
              <p>
              Employee
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.create')}}" class="nav-link">
                <i class="fas fa-pen-square"></i>
                  <p>Add Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.index')}}"class="nav-link">
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
            <a href="{{url('admin/notice')}}" class="nav-link {{ Request::is('admin/notice')? 'active' : '' }}">
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
                <a href="{{route('library.index')}}" class="nav-link">
                <i class="fas fa-user-lock"></i>
                  <p>Libary Managment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('phonebook.index')}}" class="nav-link">
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
                <a href="{{route('backup')}}" class="nav-link">
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
                <a href="{{url('admin/gallery/view')}}" class="nav-link">
                <i class="fas fa-photo-video"></i>
                  <p>Gallery</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link">
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
                <a href="{{url('admin/home/site_boost')}}" class="nav-link">
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
           
            
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off red"></i>
                    <p>
                        {{ __('Logout') }}
                    </p>
                 </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </a>
          </li>
        </ul>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
