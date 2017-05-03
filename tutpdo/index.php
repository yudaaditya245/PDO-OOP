<?php

    require "Blog.php";
    $Blog = new Blog();

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>BLOG OOP</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    </head>

    <body>

        <div class="container" style="margin-top:20px;">
            <div class="col-md-7">
                <a class="btn btn-success" href="crud/tambah.php">Tambah Artikel</a>
                <hr>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <?php
                        $data = $Blog->select();
                        while ($row = $data->fetch(PDO::FETCH_OBJ)) {
                        ?>

                        <h2 style="margin:10px 0px"><a href="crud/show.php?id=<?= $row->id ?>"><?= $row->judul ?></a></h2>
                        <p><?= $row->isi ?></p>
                        <br/>
                        <a class="btn btn-success" href='crud/update.php?id=<?= $row->id ?>'>Edit</a>
                        <a class="btn btn-danger" href='crud/hapus.php?id=<?= $row->id ?>'>Hapus</a>
                        <hr>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
