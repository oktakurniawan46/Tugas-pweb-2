<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:user.php');
    // die("Anda bukan admin");
    //jika bukan admin jangan lanjut
}else{
  //jika benar maka tidak terjadi apa apa
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
   <link rel="stylesheet" type="text/css" href="style1.css">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>welcome <?php echo $username;?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home.php">Dashboard</a></li>
          </ul>
          <form class="navbar-form navbar-right">
           
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="home.php">POST</a></li>
           
            <li><a href="logout.php" onclick="javascript: return confirm('Anda yakin ingin keluar ?')">LOGOUT</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">POSTINGAN</h1>
           POST
           <div class="kol2">
            <a name="tabel" class="tabela">
                <h1>Data POSTINGAN</h1>
                <a href="tambah.php"><input type="button" value="tambah"></a>
                <br>
                <table class="table" align="center" rules="all" border="1">
                    <tr> 
                        <th>No</th>
                        <th>TITLE</th>
                        <th>CONTENT</th> 
                        <th>TANGGAL</th>     
                        <th>AKSI</th>
                    </tr>
                    <?php
                        include "koneksi1.php";//untuk menghubungkan file koneksi yang terhubung ke database
                        $no = 1;//untuk menampilkan nomor secara urut
                        $data = mysqli_query($db,"select * from post");//menampilkan data di tabel post
                        while($d = mysqli_fetch_array($data)) {//perulangan untuk mamanggil variabel data yang menampilkan isi tabel post
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['title']; ?></td>
                        <td><?php echo $d['isi']; ?></td>
                         <td><?php echo $d['tanggal']; ?></td>

  
                        <td><a href="edit.php?id_post=<?php echo $d['id_post']; ?>"><input type="button" value="Edit" title="Edit"></a> 
                            <a href="hapus.php?id_post=<?php echo $d['id_post']; ?>"  onclick="javascript: return confirm('Sure do you want to delete this product?')"><input type="button" value="Delete" title="Hapus"  class="del"></a> </td>

                    </tr>
                    <?php
                }
                ?>
                </table>
            </a>
            </div>
            </div>

         

          <div class="table-responsive">
          
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
