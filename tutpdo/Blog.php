<?php

class Blog
{

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tut_pdo', 'root', '');
    }

    public function select()
    {
        $sql = "SELECT * FROM blog";
        $query = $this->db->query($sql);
        return $query;
    }

    public function tambah($judul, $isi)
    {
        $sql = "INSERT INTO blog VALUES(null, '$judul', '$isi')";

        $query = $this->db->query($sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function selectWhere($id)
    {
        $sql = "SELECT * FROM blog WHERE id=$id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function update($judul, $isi, $id)
    {
        $sql = "UPDATE blog SET judul='$judul', isi='$isi' WHERE id=$id";
        $query = $this->db->query($sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM blog WHERE id=$id";
        $query = $this->db->query($sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

}
