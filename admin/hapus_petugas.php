<?php
$conn=mysqli_connect("localhost","root","","db_spp");
$id_petugas=$_GET["id_petugas"];

$query="DELETE FROM petugas WHERE id_petugas=$id_petugas";
mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)> 0){
    echo"
    <script>
    alert('data berhasil dihapus');
    document.location.href='petugas.php';
    </script>
    ";
}else{
    echo"
        <script>
        alert('data gagal ditambahkan');
        document.location.href='petugas.php';
        </script>
        ";
}
?>