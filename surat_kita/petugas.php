<?php
include 'connect.php'; 
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Daftar Petugas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Aplikasi Surat Kita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="petugas.php">Daftar petugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="surat_masuk.php">Surat Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="surat_keluar.php">Surat keluar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="disposisi.php">Disposisi</a>
          </li>
          
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
           <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">
      <!-- <div class="jumbotron">
        <h1>Welcome</h1>
        <p class="lead">Selamat datang di Dashboard Admin Aplikasi Surat Kita</p>
      </div> -->
      <div class="card col-md-12 card border-dark mb-3">
      <div class="card-body">
      <h5 class="card-title">Daftar Petugas</h5>
       <a href="t_petugas.php" class="btn btn-primary">Tambah Petugas</a>
       <button type="submit" onclick="window.print();" class="btn btn-default">Cetak</button>
       </br></br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID Petugas</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>Password</th>
                  <th>Hak</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php 
                  include "connect.php";
                  $sql = " select * FROM petugas"; 
                  $result = $konek->query($sql);
                  $no = 1;
                  if ($result->num_rows > 0) {
                    foreach ($result as $row) {
                ?>
                <td><?php echo $row["id_petugas"]; ?></td>
                <td><?php echo $row["nama_depan"]; ?></td>
                <td><?php echo $row["nama_belakang"]; ?></td>
                <td><?php echo $row["pasword"]; ?></td>
                <td><?php echo $row["hak"]; ?></td>
                <th>
                  <a href="u_petugas.php?id=<?php echo $row['id_petugas']; ?>" class="btn btn-warning">Update</a>
                  <a href="h_petugas.php?id=<?php echo $row['id_petugas']; ?>" class="btn btn-danger">Delete</a>                
                </th>
                </tr>
              </tbody>
              <?php 
                  $no++;
                  }
                } else { ?>
                  <th colspan="3">0 tarif found</th>  
              <?php 
                }
              ?>
            </table>
        </div>
        </div>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
