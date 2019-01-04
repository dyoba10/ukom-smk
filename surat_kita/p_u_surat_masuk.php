<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/surat_masuk.php">

<?php
include 'connect.php';

$id = $_GET['id'];
$no_agenda = $_POST["no_agenda"];
$id_petugas = $_POST["id_petugas"];
$jenis_surat = $_POST["jenis_surat"];
$tgl_kirim = $_POST["tgl_kirim"];
$tgl_terima = $_POST["tgl_terima"];
$no_surat = $_POST["no_surat"];
$pengirim = $_POST["pengirim"];
$perihal = $_POST["perihal"];
 

$sql =  "UPDATE surat_masuk SET no_agenda='$no_agenda',id_petugas='$id_petugas',jenis_surat='$jenis_surat',tgl_kirim='$tgl_kirim',tgl_terima='$tgl_terima',no_surat='$no_surat',pengirim='$pengirim',perihal='$perihal' WHERE id='$id'";
mysqli_query($konek,$sql);
header("Location:surat_masuk.php");
?>