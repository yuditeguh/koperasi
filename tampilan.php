<?php 
include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_anggota</th>
      <th scope="col">nik</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
       <th scope="col">no_tlp</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
		$data = mysqli_query($host,"select * from anggota");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_admin']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['alamat']; ?></td>			
			</tr>
			<?php 
		}
			?>
  </tbody>
</table>
</body>
</html>