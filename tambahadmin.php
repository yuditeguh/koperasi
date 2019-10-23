<?php 
include "koneksi.php";
include "home.php";
 ?>
 <div class="content-wrapper">
 	<section class="content">
 		 	 <?php 
        if(isset($_POST['simpan'])) {
          $id_admin = $_POST['id_admin'];
          $nama = $_POST['nama'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $alamat = $_POST['alamat'];
          

          $query_insert = "insert into admin(id_admin, nama, username, password, alamat)values('$id_admin','$nama','$username','$password', '$alamat')";
          $data = mysqli_query($koneksi, $query_insert);
          if ($query_insert) {
            echo"Data Berhasil Disimpan,MANTEP!!!";
          }else{
            echo "Data Gagal Disimpan, SABAR!!!";
          }
        }
       ?>

 	 <div class="card-body table-responsive p-0">
                

             <form method="POST">
               <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">id_admin</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_admin"  class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control"  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" >
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-10">
                      <input type="text" name="password" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">alamat</label>
                    <div class="col-sm-10">
                      <input type="textarea" name="alamat" class="form-control"  >
                    </div>
                  </div>


                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <button type="submit" class="btn btn-primary" name="cancel">cancel</button>
             </form>
              </div>

 	</section>


    <!-- /.content -->
  </div>
 </div>
 <?php 
include "footer.php";
  ?>
  