<?php
    include 'koneksi1.php';

    $id = $_GET['id_post'];

    mysqli_query($db,"delete from post where id_post='$id'");//menghapus data berdasarkan id

    header("location:home.php");
?>