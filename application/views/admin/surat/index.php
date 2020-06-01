
              <div class="card">
              <div class="card-header">
                <div class="col-md-3">
                  <a href="<?= base_url('admin/C_Admin/tambah_surat')?>" class="btn btn-primary" >Tambah Surat</a>
                </div>
              </div>
              <div class="card-header">
                <h3 class="card-title">Data Surat </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($surat as $key): ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->nama_surat ?></td>
                          <td>
                         <a href="<?= base_url('admin/C_Admin/surat_hapus/'.$key->id_surat)?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i>Hapus</a>
        </td>
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

