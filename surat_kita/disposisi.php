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

    <title>Disposisi</title>

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
          <li class="nav-item">
            <a class="nav-link" href="petugas.php">Daftar petugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="surat_masuk.php">Surat Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="surat_keluar.php">Surat keluar</a>
          </li>
          <li class="nav-item active">
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
      <h5 class="card-title">Daftar Disposisi</h5>
       <a href="t_disposisi.php" class="btn btn-primary">Tambah Disposisi</a>
       <button type="submit" onclick="window.print();" class="btn btn-default">Cetak</button>
       </br></br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>No Disposisi</th>
                  <th>No Agenda</th>
                  <th>No Surat</th>
                  <th>Kepada</th>
                  <th>Keterangan</th>
                  <th>Status Surat</th>
                  <th>Tanggapan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php 
                  include "connect.php";
                  $sql = " select * FROM disposisi"; 
                  $result = $konek->query($sql);
                  $no = 1;
                  if ($result->num_rows > 0) {
                    foreach ($result as $row) {
                  ?>
                <td><?php echo $row["no_disposisi"]; ?></td>
                <td><?php echo $row["no_agenda"]; ?></td>
                <td><?php echo $row["no_surat"]; ?></td>
                <td><?php echo $row["kepada"]; ?></td>
                <td><?php echo $row["keterangan"]; ?></td>
                <td><?php echo $row["status_surat"]; ?></td>
                <td><?php echo $row["tanggapan"]; ?></td>
                <th>
                <a href="" class="btn btn-warning">Update</a>
                <a href="h_disposisi.php?id=<?php echo $row['no_disposisi']; ?>" class="btn btn-danger">Delete</a>
                </th>
                </tr>
              </tbody>
              <?php 
                  $no++;
                  }
                } else { ?>
                  <th colspan="3">0 data found</th>  
              <?php 
                }
              ?>
            </table>


            

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
