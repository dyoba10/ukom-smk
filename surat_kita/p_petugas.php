<html>
<head>
	<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/petugas.php">
</head>
</html>

<?php
   include "connect.php";
   global $_POST;
   $sql = "insert into petugas(id_petugas,nama_depan,nama_belakang,pasword,hak)
   values ('".$_POST["id_petugas"]."','".$_POST["nama_depan"]."','".$_POST["nama_belakang"]."','".$_POST["password"]."','".$_POST["hak"]."')";
   if ($konek->query($sql)=== TRUE) {
   	echo "sukses";
   }else{
   	echo "error".$sql."<br>".$konek->error;
   }
?>