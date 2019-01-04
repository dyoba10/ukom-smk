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
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">
      <!-- <div class="jumbotron">
        <h1>Welcome</h1>
        <p class="lead">Selamat datang di Dashboard Admin Aplikasi Surat Kita</p>
      </div> -->
      <div class="card col-md-12">
      <div class="card-body">
       <a href="petugas.php" class="btn btn-primary">Daftar Petugas</a>
       </br></br>
          <h2 class="sub-header">Tambah Petugas</h2>
      <form action="p_petugas.php" method="POST" class="form-horizontal" role="form">
        
        <div class="form-group">
          <label class="col-sm-2 control-label">ID Petugas</label>
          <div class="col-sm-8">
            <input type="username" class="form-control" name="id_petugas" placeholder="ID Petugas" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Depan</label>
          <div class="col-sm-8">
            <input type="username" class="form-control" name="nama_depan" placeholder="Nama Depan" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Belakang</label>
          <div class="col-sm-8">
            <input type="username" class="form-control" name="nama_belakang" placeholder="Nama Belakang" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
        </div>

        
        <div class="form-group">
          <label class="col-sm-2 control-label">Hak</label>
          <div class="col-sm-2">
          <select name="hak">
            <option value="">Pilih Hak</option>
                 <?php
                   $sql = "SELECT * FROM petugas";
                   $result = $konek->query($sql);

                   if($result->num_rows > 0) {
                      foreach ($result as $row) {
                        ?>
                        <option value="<?php echo $row["hak"];?>">
                          <?php echo $row["hak"]; ?>
                        </option>
                        <?php
                      }  
                        } else{?>
                           <td>hak not found</td>
                           <?php
                   }
                 ?>
          </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label"></label>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-default" name="proses" value="simpan">Submit</button>
          </div>
        </div>

      </form>
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
