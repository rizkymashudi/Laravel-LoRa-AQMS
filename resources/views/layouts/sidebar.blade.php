 <!-- Sidebar user panel (optional) -->
 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    {{-- <div class="image">
      <img src="{{ url('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div> --}}
 </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Charts
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/charts/chartjs.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ChartJS</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/charts/flot.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Flot</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/charts/inline.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inline</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p>
            UI Elements
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/UI/general.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>General</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/UI/icons.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/UI/buttons.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buttons</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/UI/sliders.html')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/UI/modals.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Modals & Alerts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/UI/navbar.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Navbar & Tabs</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/UI/timeline.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Timeline</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/UI/ribbons.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ribbons</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ route('About') }}" class="nav-link">
          <i class="nav-icon fas fa-info-circle"></i>
          <p>
            About
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Tables
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/tables/simple.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Simple Tables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/tables/data.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>DataTables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('AdminLTE/pages/tables/jsgrid.html') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>jsGrid</p>
            </a>
          </li>
        </ul>
      </li>
      
      
    </ul>
  </nav>
  <!-- /.sidebar-menu -->