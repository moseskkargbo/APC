  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
      
        <div class="pull-left image">
          <img src="{{ asset('images/user.png') }}" class="img-circle" alt="User Image">
        </div>
    
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::path() == 'admin' ? 'active' : '' }}"><a href="/admin"><i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span></a></li>


        <!--  USERS  -->
        <li class="{{ Request::path() == 'admin/users' ? 'active' : '' }}">
          <a href="{{ route('user.index') }}"><i class="fa fa-user"></i> Users</a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
      </ul>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Region</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Add Region</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Manage Region</a></li>
          </ul>
        </li>
      </ul>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>District</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Add District</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Manage District</a></li>
          </ul>
        </li>
      </ul>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Constituency</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Add Constituency</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Manage Constituency</a></li>
          </ul>
        </li>
      </ul>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Ward</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Add Ward</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Manage Ward</a></li>
          </ul>
        </li>
      </ul>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Polling Center</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Add Polling Center</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Manage Polling Center</a></li>
          </ul>
        </li>
      </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>