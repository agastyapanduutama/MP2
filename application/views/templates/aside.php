
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url()?>assets/admin/index3.html" class="brand-link">
      <img src="<?= base_url()?>assets/admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Surat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['nama']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <?php if ($_SESSION['level']==='1'): ?>

          <li class="nav-item">
            <a href="<?= base_url('admin/data-mahasiswa')?>" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>Data Mahasiswa</p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?= base_url('admin/data-pengajuan')?>" class="nav-link">
              <i class="nav-icon fas fa-envelope-open-text"></i>
              <p>Data Pengajuan Surat</p>
            </a>
          </li>


           <li class="nav-item">
            <a href="<?= base_url('admin/data-surat')?>" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Jenis Surat</p>
            </a>
          </li>

          <?php endif ?>

          <?php if ($_SESSION['level']==='2'): ?>
            
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('surat')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('surat/pengajuan')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Surat</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="<?= base_url('profile/')?>" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>Profile</p>
            </a>
          </li>
          <?php endif ?>

          <li class="nav-item">
            <a href="<?= base_url('keluar')?>" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>Keluar</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  