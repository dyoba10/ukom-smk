<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($konek, "select * from petugas where id_petugas='$username' and pasword='$password'");
$result = mysqli_num_rows($login);

if ($result>0) {
	$user = mysqli_fetch_array($login);
	session_start();
	$_SESSION['username'] = $username['username'];
	header("location:dashboard.php");
}else{
	header("location:index.php");
}
?>