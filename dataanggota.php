<?php 
include "home.php";
include "koneksi.php";
 ?>
  <div class="content-wrapper">
    <a class="btn btn-primary" href="tambahanggota.php" role="button"><i class="fa fa-plus"></i>

    </a>
  
    <section class="content">
    <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
      <th>id_anggota</th>
      <th>nik</th>
      <th>nama</th>
      <th>alamat</th>
      <th>no_telp</th>
      <th>pekerjaan</th>
      <th>username</th>
      <th>passsword</th>
     
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                    $query = "SELECT * FROM anggota";
                    $sql = mysqli_query($koneksi, $query);
                    $rows = mysqli_num_rows($sql);
                    $no = 1;
                    while ($data= mysqli_fetch_array($sql)) {
   
      ?>
      <tr>
        <td><?php echo $data['id_anggota']; ?></td>
        <td><?php echo $data['nik']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <td><?php echo $data['no_tlp']; ?></td>
        <td><?php echo $data['pekerjaan']; ?></td>      
        <td><?php echo $data['username']; ?></td>      
        <td><?php echo $data['password']; ?></td>      
      </tr>
      <?php 
    $no++;}
      ?>
                   
                 
                   </tbody>
                </table>
              </div>
    </section>
    <!-- /.content -->
  </div>
  <?php 
  include "footer.php";
  ?>