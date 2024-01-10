<?php
$conn=mysqli_connect("localhost","root","","db_spp");
if(isset($_POST["submit"])){
  $tahun=$_POST["tahun"];
  $nominal=$_POST["nominal"];
  $query="INSERT INTO spp VALUES('','tahun','$nominal')";
  mysqli_query($conn,$query);
  if(mysqli_affected_rows($conn) > 0){
    echo"
    <script>
    alert('data berhasil ditambahkan');
    document.location.href='spp.php';
    </script>
    ";
  }else{
    echo"
    <script>
    alert('data gagal ditambahkan');
    document.location.href='#';
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
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 align="center">TAMBAH DATA SPP</h1>
    </div>
    <div class="container">
      <form action="" method="post">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">tahun</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="tahun">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nominal</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nominal">
</div>
<button type="submit" name="submit" class="btn btn-success">simpan</button>
<a href="spp.php" class="btn btn-danger">batal</a>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>