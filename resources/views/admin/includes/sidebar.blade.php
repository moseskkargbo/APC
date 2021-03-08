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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Manage Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> User Roles</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Registrants</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Regions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Districts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Constituencies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Wards</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Polling Centres</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Elections</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Manage Candidates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> View</a></li>
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Create</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Delete</a></li>
          </ul>
        </li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
