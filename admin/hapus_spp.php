<?php
$conn=mysqli_connect("localhost","root","","db_spp");
$id_spp=$_GET["id_spp"];

$query="DELETE FROM spp WHERE id_spp=$id_spp";
mysqli_query($conn,$query);
if(mysqli_affected_rows($conn) > 0){
    echo"
    <script>
    alert('data berhasil dihapus');
    document.location.href='spp.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal dihapus');
    document.location.href='#';
    </script>
    ";
}
?>