<?php 
include "home.php";
include "koneksi.php";
 ?>
  <div class="content-wrapper">
    <a class="btn btn-primary" href="tambahadmin.php" role="button"><i class="fa fa-plus"></i>

    </a>
  
    <section class="content">
    <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>no</th>
      <th>id_admin</th>
      <th>nama</th>
      <th>username</th>
      <th>password</th>
      <th>alamat</th>
     
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

                    $query = "SELECT * FROM admin";
                    $sql = mysqli_query($koneksi, $query);
                    $rows = mysqli_num_rows($sql);
                    $no = 1;
                    while ($data= mysqli_fetch_array($sql)) {
   
      ?>
  
      <tr>
        <td><?php echo $data['id_admin']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['alamat']; ?></td>      
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