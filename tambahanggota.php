<?php 
include "koneksi.php";
include "home.php";
 ?>
<div class="content-wrapper">
    <section class="content">
      <?php 
        if(isset($_POST['simpan'])) {
          $id_anggota = $_POST['id_anggota'];
          $nik = $_POST['nik'];
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $no_tlp = $_POST['no_tlp'];
          $pekerjaan = $_POST['pekerjaan'];
          $username = $_POST['username'];
          $password = $_POST['password'];

          $query_insert = "insert into anggota(id_anggota, nik, nama, alamat, no_tlp, pekerjaan, username, password)values('$id_anggota','$nik','$nama','$alamat','$no_tlp','$pekerjaan','$username','$password')";
          $data = mysqli_query($koneksi, $query_insert);
          if ($query_insert) {
            echo"Data Berhasil Disimpan";
          }else{
            echo "Data Gagal Disimpan";
          }
        }
       ?>
    <div class="card-body table-responsive p-0">
                

             <form method="POST">
               <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">id_anggota</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_anggota"  class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">nik</label>
                    <div class="col-sm-10">
                      <input type="text" name="nik" class="form-control"  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" >
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">alamat</label>
                    <div class="col-sm-10">
                      <input type="textarea" name="alamat" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">no_tlp</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_tlp" class="form-control"  >
                    </div>
                  </div><div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">pekerjaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="pekerjaan" class="form-control" >
                    </div>
                  </div><div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control"  >
                    </div>
                  </div><div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-10">
                      <input type="text" name="password" class="form-control"  >
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary" name="simpan">simpan</button>
                <button type="submit" class="btn btn-primary" name="cancel">cancel</button>
             </form>
              </div>
    </section>
    <!-- /.content -->
  </div>
  <?php 
  include "footer.php";
  ?>