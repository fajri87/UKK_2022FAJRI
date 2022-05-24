<?php 
session_start();
$nisn = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];

$tanggal =$_POST['tanggal'];
$jam =$_POST['jam'];
$kegiatan =$_POST['lokasi'];
$hasil =$_POST['kegiatan'];
$id_catatan=$_POST['id_catatan'];

$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$kegiatan";

//buka file catatan.txt
$no= 0;
$data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $fragment = explode("|", $value);
    if($fragment['0']==$id_catatan){
        $line = $no-1; //mencati urutan baris ke berapa
    }
}

$data[$line] = $format;
$data = implode("\n", $data);
file_put_contents('catatan.txt',$data);
?>

<script type="text/javascript">
alert("Perubahan data catatan berhasil");
window.location.assign('user.php');
</script> 