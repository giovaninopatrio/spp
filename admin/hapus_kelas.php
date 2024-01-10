<?php
$conn=mysqli_connect("localhost","root","","db_spp");

$id_kelas=$_GET["id_kelas"];
$query="DELETE FROM kelas WHERE id_kelas=$id_kelas";
mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)> 0){
    echo"
    <script>
    alert('data berhasil dihapus');
    document.location.href='index.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal dihapus');
    document.location.href='index.php';
    </script>
    ";
}
?>