<?php
   session_start();
   require_once("koneksi1.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='index.php'>Back</a></div>";//ketika kita memasukkan username salah
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='index.php'>Back</a></div>";//ketika kita memasukkan passwor salah
     } else {
       $_SESSION['username'] = $hasil['username'];
      $_SESSION['level'] = $hasil['level'];
      if($hasil['level']=="admin"){
            header("location:home.php");//jika username dan password benar dan levelnya admin maka akan masuk ke halaman admin 
        }
    else if($hasil['level']=="user"){
            header("location:user.php");//jika username dan password benar dan levelnya user maka akan masuk ke halaman user
        }
     }
   }

?>