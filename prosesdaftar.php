<?php
session_start();

  //mengambil data dari daftar form dengan method post
   require_once("koneksi1.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);
   $usia = $_POST['usia'];
   $nim = $_POST['nim'];
   $jurusan = $_POST['jurusan'];
   $biografi = $_POST['biografi'];
   $gender = $_POST['gender'];
   $website = $_POST['website'];
   $email = $_POST['email'];
   $level=$_POST['level'];
   $sql = "SELECT * FROM user WHERE username = '$username'";//untuk mengambil data dari database yang dicocokan dengan kondisi dibawah
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";//jika datanya tidak sama dengan 0 (sudah ada di database) 
   } else {
     if(!$username || !$pass || $level) {//jika username, password, dan level kosong
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     }else if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
{ 
//bila captcha yang dimasukkan salah
echo"<div align='center'>kode captcha salah coyy check lagi donk!!! <a href='daftar.php'>Back</a></div>";
}

      else {//query untuk meninputkan data diatas
       $data = "INSERT INTO user VALUES (NULL, '$username', '$pass', '$usia', '$nim', '$jurusan', '$biografi', '$gender', '$website', '$email', '$level')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>

