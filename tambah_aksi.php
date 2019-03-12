<?php
    include 'koneksi1.php';

    $title = $_POST['title'];
    $isi = $_POST['isi'];
    $tanggal = date("Y-m-d H:i:s");
  
    $sql = "INSERT INTO post VALUES('','$title','$isi','$tanggal')";
mysqli_query($db,$sql);//perintah untuk insert data

    header("location:home.php");//akan kembali ke home setelah proses update
?>