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



<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Admin </title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login admin
         </div>
         <form action="#" method="post">
            <div class="field">
               <input type="text" name="username" required>
               <label>ussername</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">
                <a href ="login_siswa.php">login siswa</a>
            </div>
         </form>
      </div>
   
   </body>
</html>