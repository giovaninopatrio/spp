<?php
$conn=mysqli_connect("localhost","root","","db_spp");
if(isset($_POST["submit"])){
  $nis=$_POST["nis"];
  $nama=$_POST["nama"];
  $id_kelas=$_POST["id_kelas"];
  $alamat=$_POST["alamat"];
  $no_telp=$_POST["no_telp"];
  $id_spp=$_POST["id_spp"];
  $query="INSERT INTO siswa VALUES('','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')";
  mysqli_query($conn,$query);
  if(mysqli_affected_rows($conn) > 0){
    echo"
    <script>
    alert(data berhasil ditambahkan);
    document.location.href='siswa.php';
    </script>
    ";
  }else{
    echo"
    <script>
    alert(data gagal ditambahkan);
    document.location.href='siswa.php';
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
      <h1 align="center">TAMBAH DATA SISWA</h1>
     </div>
     <div class="container">
      <form action="" method="post">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nis</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nis">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nama</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama">
</div>
<div class="mb-3">
  <?php
  $query= "SELECT * FROM kelas";
  $result=mysqli_query($conn,$query);
  ?>
  <label for="exampleFormControlInput1" class="form-label">id kelas</label>
  <select name="id_kelas" id="" class="form-control" required >  
  <?php
  while($kotak= mysqli_fetch_assoc($result)):
  ?>
  <option value="<?php echo $kotak["id_kelas"];?>"> <?php echo $kotak["nama_kelas"];?> <?php echo $kotak["kompetensi_keahlian"];?></option>
  <?php
  endwhile;
  ?>
  </select>
  
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">alamat</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="alamat">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">no telp</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="no_telp">
</div>
<div class="mb-3">
  <?php
  $query="SELECT * FROM spp";
  $result= mysqli_query($conn,$query);
  ?>
  <label for="exampleFormControlInput1" class="form-label">id_spp</label>
  <select name="id_spp" id="" class="form-control" required >

  <?php
  while($kotak= mysqli_fetch_assoc($result)):
  ?>
  <option value="<?php echo $kotak["id_spp"];?>"><?php echo $kotak["nominal"];?></option>
  <?php
  endwhile;
  ?>
  </select>
  
</div>
      <button type="submit" name="submit" class="btn btn-success">simpan</button>
      <a href="siswa.php" class="btn btn-danger">batal</a>
      </form>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>