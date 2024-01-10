<?php
include("koneksi.php");
if(isset($_POST["login"])){
$nisn=$_POST["nisn"];
$nis=$_POST["nis"];

$query="SELECT * FROM siswa WHERE nisn='$nisn' AND 
nis='$nis'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)> 0){
    echo"
    <script>
    alert('login berhasil');
    document.location.href='admin/siswa.php';
    </script>";
}else{
  echo"
  <script>
  alert('data tidak ditemukan');
  document.location.href='#';
  </script>
  ";
}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="#" method="post">
            <div class="field">
               <input type="text" name="nisn" required>
               <label>masukan nis</label>
            </div>
            <div class="field">
               <input type="nis" name="nis" required>
               <label>masukan nis</label>
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
                <a href="index.php">login admin</a>
            </div>
         </form>
      </div>
   </body>
</html>
