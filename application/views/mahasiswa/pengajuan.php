 
<style type="text/css">
  label{
    font-size: 15px;
  }
</style>


 <div class="card card-primary">
              <?php echo form_open(base_url('surat/kirim'), 'class="form-horizontal"');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Surat</label>
                   <select name="jenis" class="form-control">
                      <?php foreach ($surat as $key): ?>
                         <option value="<?= $key->nama_surat?>"><?= $key->nama_surat?></option>
                      <?php endforeach ?>  
                   </select>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
               <?php echo form_close(); ?> 
            </div>
            <!-- /.card -->


              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Status</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Surat Diajukan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($pengajuan as $key): ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $key->jenis?></td>
                          <td><?php
                                  if ($key->status == '1') {
                                    echo "Disetujui";
                                  }elseif ($key->status == '0') {
                                    echo "Belum disetujui";
                                  }else{
                                    echo "Ditolak";
                                  }
                           ?></td>
                         <td>
                          <a href="" onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>  Hapus</a>
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

          <!-- href="<?= base_url('backend/hapus_satuan_kerja/'.$list->id_satuan)?>" -->
                    