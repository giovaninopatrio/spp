<?php
$conn= mysqli_connect("localhost","root","","db_spp");
$nisn=$_GET["nisn"];
$query="SELECT * FROM siswa WHERE nisn=$nisn";
$result=mysqli_query($conn,$query);
$kotak=mysqli_fetch_array($result);



if(isset($_POST["submit"])){
    $nisn= $_POST["nisn"];
    $nis=$_POST["nis"];
    $nama=$_POST["nama"];
    $id_kelas=$_POST["id_kelas"];
    $alamat=$_POST["alamat"];
    $no_telp=$_POST["no_telp"];
    $id_spp=$_POST["id_spp"];


    $queryedit="UPDATE  siswa SET 
        nisn= '$nisn',
      nis= '$nis',
      nama= '$nama', 
      id_kelas= '$id_kelas',
      alamat= '$alamat',
      no_telp= '$no_telp', 
      id_spp= '$id_spp' 
        ";
    mysqli_query($conn,$queryedit);
    if(mysqli_affected_rows($conn) > 0){
        echo"
        <script>
        alert('data berhasil ditambahkan');
        document.location.href='kelas.php';
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
        <h1 align="center">EDIT DATA SISWA</h1>
    </div>
            <div class="container">
                <form action="" method="post">
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nisn</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nisn" value="<?php echo $kotak["nisn"];?>">
</div>
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nis </label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nis" value="<?php echo $kotak["nis"];?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nama</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama" value="<?php echo $kotak["nama"];?>"> 
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">id kelas</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="id_kelas" value="<?php echo $kotak["id_kelas"];?>"> 
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">alamat</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="alamat" value="<?php echo $kotak["alamat"];?>"> 
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">no telp</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="no_telp" value="<?php echo $kotak["no_telp"];?>"> 
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">id spp</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="id_spp" value="<?php echo $kotak["id_spp"];?>"> 
</div>
<button name="submit" type="submit" class="btn btn-success">simpan</button>
<a href="kelas.php" class="btn btn-danger">batal</a>

                </form>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>