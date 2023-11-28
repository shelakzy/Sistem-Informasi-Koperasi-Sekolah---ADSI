<?php
    include 'koneksi.php';

    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stok =  $_POST['stok'];
    $tanggal = $_POST['tanggal'];
    $kadaluwarsa = $_POST['kadaluwarsa'];

    $query = "INSERT INTO barang (kode_barang, nama_barang, banyak_barang, tanggal_masuk, tanggal_kadaluwarsa) VALUES ('$kode_barang', '$nama_barang', '$stok', '$tanggal', '$kadaluwarsa')";
            
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else{
        echo "<script>alert('barang berhasil ditambahkan!');window.location='dashboard-admin/stok-barang.php';</script>";
    }
      
?>