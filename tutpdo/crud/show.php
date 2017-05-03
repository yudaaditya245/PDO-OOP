<?php
    require '../Blog.php';
    $Blog = new Blog();
    $id = $_GET['id'];
    $data = $Blog->selectWhere($id);
    $row = $data->fetch(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css">
  </head>
  <body>
      <div class="container" style="margin-top:20px;">
          <div class="col-md-7">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <a class="btn btn-sm btn-info" href='../index.php'><span class="glyphicon glyphicon-arrow-left"></span></a>
                  </div>
                  <div class="panel-body">
                      <h2 style="margin:5px 0px;"><?= $row->judul ?></h2>
                      <p><?= $row->isi ?></p>
                  </div>
                  <div class="panel-footer">
                      <a class="btn btn-success" href='update.php?id=<?= $row->id ?>'>Edit</a>
                      <a class="btn btn-danger" href='hapus.php?id=<?= $row->id ?>'>Hapus</a>
                  </div>
              </div>
          </div>
      </div>
  </body>
</html>
