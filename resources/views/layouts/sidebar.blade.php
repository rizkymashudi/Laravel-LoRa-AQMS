 <!-- Sidebar user panel (optional) -->
 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    {{-- <div class="image">
      <img src="{{ url('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div> --}}
    <div class="col text-center" style="width: auto">
      <p id="currentDate" style="margin:auto; color:#1b2a4e; font-size: 14px;"></p>
      <p id="waktu" style="margin:auto; color:#1b2a4e; font-size: 14px;"></p>
    </div>
      
      <script>
          //timer
          var myVar = setInterval(myTimer ,1000);
          function myTimer() {
            var d = new Date();
            document.getElementById("waktu").innerHTML = d.toLocaleTimeString();
          }

          //date
          $(document).ready(() => {
            let month = [
              "Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ],
            day = [
              "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"
            ],
            date = new Date();
            date.setDate(date.getDate());
            $("#currentDate").html(
              `${day[date.getDay()]}<br>${
                month[date.getMonth()]
              } ${date.getDate()}, ${date.getFullYear()}`
            );
          });

      </script> 
 </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item nav-compact">
        <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('/') ? 'active' : null }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li>
      
      {{-- <li class="nav-item">
        <a href="{{ route('History') }}" class="nav-link {{ Request::is('History') ? 'active' : null }}">
          <i class="nav-icon fas fa-history"></i>
          <p>
            History
          </p>
        </a>
      </li> --}}

      <li class="nav-item nav-compact">
        <a href="{{ route('Misc') }}" class="nav-link {{ Request::is('Misc') ? 'active' : null }}">
          <i class="nav-icon fas fa-info-circle"></i>
          <p>
            Informasi Umum
          </p>
        </a>
      </li>
      
      <li class="nav-item nav-compact">
        <a href="{{ route('About') }}" class="nav-link {{ Request::is('About') ? 'active' : null }}">
          <i class="nav-icon fas fa-question-circle"></i>
          <p>
            About
          </p>
        </a>
      </li>    
      
    </ul>
  </nav>
  <!-- /.sidebar-menu -->