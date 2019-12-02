<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{$user->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i>{{$role->name}}</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      @if($role->name == 'Admin')
      <li class="treeview">
        <a href="#"><i class="fa fa-group"></i> <span>Manage Employee</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">View Employees</a></li>
          <li><a href="#">Payroll</a></li>
        </ul>
      </li>
      @endif
      <li><a href="#"><i class="fa fa-link"></i> <span>Coming Soon</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
