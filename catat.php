<?php
include("koneksi.php");
if(isset($_POST["login"])){
$username=$_POST["username"];
$password=$_POST["password"];

$query="SELECT * FROM petugas WHERE username='$username' AND 
password='$password'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)> 0){
  $data=mysqli_fetch_assoc($result);
  if($data["level"]=="admin"){
    echo"
    <script>
    alert('login berhasil');
    document.location.href='admin/index.php';
    </script>
    ";
  }elseif($data["level"]=="petugas"){
    echo"
    <script>
    alert('login berhasil');
    document.location.href='petugas/index.php';
    </script>
    ";
  }else{
    echo"
    <script>
    alert('data tidak ditemukan');
    document.location.href='index.php';
    </script>
    ";
  }

}else{
  echo"
  <script>
  alert('data tidak ditemukan');
  document.location.href='index.php';
  </script>
  ";
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aplikasi pembayaran spp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <style>
      body{
        background-image: url(rio.jfif);
      }
    </style>
          <h1 align="center">LOGIN ADMIN </h1>
          <br>
          <br>
          <br><br> 
            <form action="" method="post">
            <div class="container">
            <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">masukan username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="username">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">masukan password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" name="password">
</div>
<button type="submit" name="login" class="btn btn-success">login</button>
<br>
<br>
        <a href="login_siswa.php" class="btn btn-primary">login siswa</a>
            </div>
            </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>