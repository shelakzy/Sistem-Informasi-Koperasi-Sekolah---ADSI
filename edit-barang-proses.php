<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stok =  $_POST['stok'];
    $tanggal = $_POST['tanggal'];
    $kadaluwarsa = $_POST['kadaluwarsa'];

    $query = "UPDATE barang SET kode_barang = '$kode_barang',nama_barang = '$nama_barang',banyak_barang = '$stok',tanggal_masuk = '$tanggal',tanggal_kadaluwarsa= '$kadaluwarsa'";
    $query .= "WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else{
        echo "<script>alert('barang berhasil disimpan!');window.location='dashboard-admin/stok-barang.php';</script>";
    }
      
?>

