<?php 
include "koneksi.php"
$id_anggota = $_POST['id_anggota']
$nik = $_POST['nik']
$nama = $_POST['nama']
$alamat = $_POST['alamat']
$no_telp = $_POST['no_telp']
$pekerjaan = $_POST['pekerjaan']
$username = $_POST['username']
$password = $_POST['password']
if (empty($id_anggota)) {
	echo "<div class='alert alert-warning alert-dismissable'>
<button type='button' clas='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
id_anggota id_anggota Harus Terisi Bro!!!
	</div>";
}

 ?>}
