<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pesanan values('','$produk','$jumlah','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:indexx.php");
 
?>

