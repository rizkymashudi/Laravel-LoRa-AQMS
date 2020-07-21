 <!-- Sidebar user panel (optional) -->
 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    {{-- <div class="image">
      <img src="{{ url('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div> --}}
    <a href="javascript:void(0)" class="sa-sidebar-shortcut-toggle" style="color:white;">
      <p id="waktu" align="center"></p>
      <script>
          var myVar = setInterval(myTimer ,1000);
          function myTimer() {
            var d = new Date();
            document.getElementById("waktu").innerHTML = d.toLocaleTimeString();
          }
      </script>
  </a>
 </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('/') ? 'active' : null }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
 
      <li class="nav-item">
        <a href="#" class="nav-link {{ Request::is('#') ? 'active' : null }}">
          <i class="nav-icon fas fa-file"></i>
          <p>
            Blank Page
          </p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="{{ route('About') }}" class="nav-link {{ Request::is('About') ? 'active' : null }}">
          <i class="nav-icon fas fa-info-circle"></i>
          <p>
            About
          </p>
        </a>
      </li>    
      
    </ul>
  </nav>
  <!-- /.sidebar-menu -->