<?php
include 'koneksi.php';

$id = $_GET['id'];
$query ="DELETE FROM barang WHERE id='$id'";
$result = mysqli_query($conn,$query);

if(!$result){
    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
} else{
    echo "<script>alert('barang berhasil dihapus!');window.location='dashboard-admin/stok-barang.php';</script>";
}

?>