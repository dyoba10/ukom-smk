<html>
<head>
	<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/surat_masuk.php">
</head>
</html>

<?php
   include "connect.php";
   global $_POST;
   $sql = "insert into surat_masuk(no_agenda,id_petugas,jenis_surat,tgl_kirim,tgl_terima,no_surat,pengirim,perihal)
   values ('".$_POST["no_agenda"]."','".$_POST["id_petugas"]."','".$_POST["jenis_surat"]."','".$_POST["tgl_kirim"]."','".$_POST["tgl_terima"]."','".$_POST["no_surat"]."','".$_POST["pengirim"]."','".$_POST["perihal"]."')";
   if ($konek->query($sql)=== TRUE) {
   	echo "sukses";
   }else{
   	echo "error".$sql."<br>".$konek->error;
   }
?>