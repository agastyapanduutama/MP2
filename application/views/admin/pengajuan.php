
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Surat Belum Di konfirmasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Jenis Surat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($pengajuan as $key): ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->nama ?></td>
                          <td><?= $key->nim ?></td>
                          <td><?= $key->jenis ?></td>
                          <td>
                          <a href="<?= base_url('admin/C_Admin/konfirmasi_pengajuan/'.$key->id_pengajuan)?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>  Konfirmasi</a>
                          <a href="<?= base_url('admin/C_Admin/tolak_pengajuan/'.$key->id_pengajuan)?>" onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>  Tolak</a>
                        </td>
                        </tr>
                    <?php endforeach ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->




              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Surat Sudah di konfirmasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Jenis Surat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($konfirmasi as $key): ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->nama ?></td>
                          <td><?= $key->nim ?></td>
                          <td><?= $key->jenis ?></td>
                          <td>
                          <a href="<?= base_url('admin/C_Admin/tolak_pengajuan/'.$key->id_pengajuan)?>" onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>  Batal Konfirmasi</a>
                        </td>
                        </tr>
                    <?php endforeach ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Surat Di Tolak</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Jenis Surat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($tolak as $key): ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->nama ?></td>
                          <td><?= $key->nim ?></td>
                          <td><?= $key->jenis ?></td>
                          <td>
                         <a href="<?= base_url('admin/C_Admin/konfirmasi_pengajuan/'.$key->id_pengajuan)?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>  Konfirmasi</a>
                        </tr>
                    <?php endforeach ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->