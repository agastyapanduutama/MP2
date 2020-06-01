<div class="card">
              <div class="card-header">
                <h3 class="card-title">Cetak Surat</h3>
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
                                    }elseif ($key->status == '2') {
                                      echo "Belum disetujui";
                                    }else{
                                      echo "Tidak Disetujui";
                                    }
                             ?></td>
                           <td>
                            <?php
                                  if ($key->status === '1') { ?> 
                                  <a href="<?= base_url('assets/upload/'.$key->file) ?>" download class='btn btn-success btn-xs'><i class='fa fa-print'></i>Cetak</a>
                                  <?php }else{

                                  }
                             ?>
                          </td>
                        </tr>
                    <?php endforeach ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>