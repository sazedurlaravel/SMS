 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

      <span class="brand-text font-weight-light">Nurul Huda High School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Manage Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
              
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profiles.edit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('profiles.password.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Manage Setup
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('setups.classes.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Class</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('setups.year.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Year</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('setups.group.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Group</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('setups.shift.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Shift</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('fee.category.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View FeeCategory</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('fee.amount.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Fee Amount</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('exam.type.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View ExamType</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('setups.subject.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Subject</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('assign.subject.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setups.designation.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Designation</p>
                </a>
              </li>
              
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Manage Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('students.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Student</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('students.roll.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roll Generate</p>
                </a>
              </li>
              
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Fee Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('students.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Registration</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('reg.fee.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registration Fee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('monthly.fee.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Fee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('exam.fee.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Fee</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Employee Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee List</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('employee.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.salary.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Salary</p>
                </a>
              </li>
              
            </ul>
          </li>
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>