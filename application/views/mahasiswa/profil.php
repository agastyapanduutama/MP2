<div class="card card-primary">

<form method="POST" action="<?= base_url('mahasiswa/C_Mahasiswa/simpan_profile/'.$this->session->userdata('id_user'))?>" class="form-horizontal" >

    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Panggilan</label>
       <input type="" class="form-control" value="<?= $_SESSION['nama_user']?>" name="nama_user">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Nama Lengkap</label>
       <input type="" class="form-control" value="<?= $_SESSION['nama']?>" name="nama">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">NIM</label>
       <input type="number" class="form-control" value="<?= $_SESSION['nim']?>" name="nim">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
       <input type="" class="form-control" value="<?= $_SESSION['username']?>" name="username">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Rubah Password / Masukan Password untuk konformasi</label>
       <input type="password" class="form-control" required=""  name="password">
      </div>




    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   <?php echo form_close(); ?> 
</div>
<!-- /.card -->