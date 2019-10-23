 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">My Template</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Yudi Teguh</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview ">
            <a href="" class="nav-link active">
              <i class="nav-icon fas "></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=dataanggota.php class="nav-link active">
                  <i class="far fa fa-user nav-icon"></i>
                  <p>Data Anggota</p>
                </a>
              </li> 
            </ul> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=dataadmin.php class="nav-link active">
                  <i class="far fa fa-user nav-icon"></i>
                  <p>Data admin</p>
                </a>
              </li> 
            </ul>
          </nav>
          <nav>
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas "></i>
              <p>
                Data Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=datapeminjaman.php class="nav-link active">
                  <i class="far fa fa-user nav-icon"></i>
                  <p>Data Peminjaman</p>
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