<?php 
session_start();
$nisn = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$kegiatan =$_POST['lokasi'];
$hasil =$_POST['kegiatan'];
$id_catatan=rand(1000,100000);
$format = "\n$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$kegiatan";
$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$kegiatan";
//buka file catatan.txt
$file = fopen('catatan.txt','a');
fwrite($file, $format);

//tutup file catatan
fclose($file); ?>

<script type="text/javascript">
alert("Data catatan berhasil ditambahkan");
window.location.assign('user.php');
</script>