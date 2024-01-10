<?php
$conn= mysqli_connect("localhost","root","","db_spp");
$id_kelas=$_GET["id_kelas"];
$query="SELECT * FROM kelas WHERE id_kelas=$id_kelas";
$result=mysqli_query($conn,$query);
$kotak=mysqli_fetch_array($result);



if(isset($_POST["submit"])){
    $id_kelas= $_POST["id_kelas"];
    $nama_kelas=$_POST["nama_kelas"];
    $kompetensi_keahlian=$_POST["kompetensi_keahlian"];


    $queryedit="UPDATE  kelas SET 
        nama_kelas= '$nama_kelas',
      kompetensi_keahlian= '$kompetensi_keahlian' 
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
        <h1 align="center">EDIT DATA KELAS</h1>
    </div>
            <div class="container">
                <form action="" method="post">
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama_kelas" value="<?php echo $kotak["id_kelas"];?>">
</div>
                <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">nama kelas</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama_kelas" value="<?php echo $kotak["nama_kelas"];?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">kompetensi keahlian</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="kompetensi_keahlian" value="<?php echo $kotak["kompetensi_keahlian"];?>"> 
</div>
<button name="submit" type="submit" class="btn btn-success">simpan</button>
<a href="kelas.php" class="btn btn-danger">batal</a>

                </form>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>