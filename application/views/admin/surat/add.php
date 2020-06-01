<?php echo validation_errors('<div class="alert alert-warning">','</div>');

 ?>

 <?php echo form_open_multipart(base_url('admin/C_Admin/tambah_surat'), 'class="form-horizontal"');?>
                <div class="card-body">          

                  <div class="form-group">
                    <label for="">Nama Surat</label>
                    <input type="" name="nama_surat"  required class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">File</label>
                    <input type="file" name="file" required="" class="form-control">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
               <?php echo form_close(); ?> 