<?php
    require "../Blog.php";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Artikel</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css">
  </head>

  <body>
      <div class="container" style="margin-top:20px;">
          <div class="col-md-7">
              <h3>Tambah Artikel</h3>
              <div class="panel panel-primary">
                  <div class="panel-body">
                      <form action="" method="post">
                        <label>Judul</label><br/>
                        <input class="form-control" type="text" name="judul"><br/>
                        <label>Isi</label><br/>
                        <textarea class="form-control" name="isi" rows="8" cols="80"></textarea>
                        <br/>
                        <input class="btn btn-success" type="submit" name="tambah" value="Tambah">
                        <a class="btn btn-sm btn-danger" href="../index.php">Cancel</a>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </body>

</html>

<?php

if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    if ($judul == '' || $isi == '') {
        echo 'Ada data yang kosong';
    } else {
      $Blog = new Blog();
      $Blog->tambah($judul, $isi);

      header('location:../index.php');
    }

}

 ?>
