<html>
<head>
	<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/disposisi.php">
</head>
</html>

<?php
   include "connect.php";
   global $_POST;
   $sql = "insert into disposisi(no_disposisi,no_agenda,no_surat,kepada,keterangan,status_surat,tanggapan)
   values ('".$_POST["no_disposisi"]."','".$_POST["no_agenda"]."','".$_POST["no_surat"]."','".$_POST["kepada"]."','".$_POST["keterangan"]."','".$_POST["status_surat"]."','".$_POST["tanggapan"]."')";
   if ($konek->query($sql)=== TRUE) {
   	echo "sukses";
   }else{
   	echo "error".$sql."<br>".$konek->error;
   }
?>