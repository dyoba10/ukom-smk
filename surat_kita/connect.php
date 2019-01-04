<?php 
     $servername = "localhost";
     $username  = "root";
     $password = "";
     $dbname = "surat_kita";

     $konek = new mysqli($servername,$username,$password,$dbname);

     if ($konek->connect_error){
           die("connection error :" .$konek->connect_error);

           echo "Connection Sucessfuly";
     }

?>