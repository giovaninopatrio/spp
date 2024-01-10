        <?php
            $conn=mysqli_connect("localhost","root","","db_spp");
            $result=mysqli_query($conn,"select * from kelas");

        ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <style>
        body{
            background-color: whitesmoke;
        }
    </style>
    <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
  <div class="container-fluid">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="SMEKSAMAS.png" alt="" width="100" height="100"> SMKN 1 MASBAGIK</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><b>home</b></a>
        </li>
          <a class="nav-link active" aria-current="page" a href="siswa.php"><b>siswa</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kelas.php"><b>kelas</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="petugas.php"><b>petugas</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="spp.php"><b>spp</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pembayaran.php"><b>pembayaran</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""><b>logout</b></a>
        </li>
        </li>
      </ul>
    </div>  
  </div>
</nav>
<!-- end navbar -->
<br>
<br>
            <div class="container">
                <div class="">

                
                <a href="tambah_data_kelas.php" class="btn btn-primary">TAMBAH DATA KELAS</a>
                    <table class="table table-dark table-hover">
                    <tr>
                        <th>NO</th>
                        <th>ID KELAS</th>
                        <th>NAMA KELAS</th>
                        <th>KOMPETENSI KEAHLIAN</th>
                        <th>AKSI</th>
                    </tr>
                    <tr>
                        <?php
                        $no=1;
                        while($kotak=mysqli_fetch_assoc($result)):
                        ?>
                         <td><?php echo $no;?></td>
                        <td><?php echo $kotak["id_kelas"];?></td>
                        <td><?php echo $kotak["nama_kelas"];?></td>
                        <td><?php echo $kotak["kompetensi_keahlian"];?></td>
                        <td> <a href="edit_kelas.php?id_kelas=<?php echo $kotak["id_kelas"]; ?>" class="btn btn-primary">edit</a>
                            <a href="hapus_kelas.php?id_kelas=<?php echo $kotak["id_kelas"];?>" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                        endwhile;
                    ?>

                </table>
                </div>
</div>
                

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>










