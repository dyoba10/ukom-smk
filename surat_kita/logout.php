<?php
include 'connect.php';

session_start();

$_SESSION['user'] = '';
unset($_SESSION['user']);
session_unset();
session_destroy();
header("location:index.php");
?>