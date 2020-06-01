
              <div class="card">
              <div class="card-header">
                <div class="col-md-3">
                  <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Mahasiswa</a>
                </div>
              </div>
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Panggilan</th>
                    <th>Nama Lengkap</th>
                    <th>NIM</th>
                    <th>Username</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($mahasiswa as $key): ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->nama_user ?></td>
                          <td><?= $key->nama ?></td>
                          <td><?= $key->nim ?></td>
                          <td><?= $key->username ?></td>
                          <td>
                         <a href="<?= base_url('admin/C_Admin/mahasiswa_hapus/'.$key->id_user)?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i>Hapus</a>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

         <?php echo form_open(base_url('admin/mahasiswa/tambah'), 'class="form-horizontal"');?>
                <div class="card-body">          

                  <div class="form-group">
                    <label for="">Nama Panggilan</label>
                    <input type="" name="nama_user" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Nama Lengkap Mahasiswa</label>
                    <input type="" name="nama" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Nama NIM</label>
                    <input type="number" name="nim" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="" name="username" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
               <?php echo form_close(); ?> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>