<?php
    require "../Blog.php";
    $Blog = new Blog();

    $id = $_GET['id'];
    $data = $Blog->selectWhere($id);
    $row = $data->fetch(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Hapus Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css">
  </head>

  <body>
      <div class="col-md-5 col-md-offset-1" style="margin-top:20px;">
          <div class="panel panel-primary">
              <div class="panel-body">
                <form action="" method="post">
                  <h3 style="margin:10px 0px 20px 0px;">Yakin ingin menghapus artikel "<?= $row->judul ?>" ?</h3>

                  <input class="btn btn-sm btn-default" type="submit" name="hapus" value="Ya">
                  <input class="btn btn-danger" type="submit" name="hapus" value="Tidak">
                </form>

              </div>
          </div>
      </div>
  </body>

</html>

<?php

if (isset($_POST['hapus'])) {
    $hapus = $_POST['hapus'];

    if ($hapus == 'Ya') {
        $Blog->hapus($id);
    }

    header('location:../index.php');

}

 ?>
