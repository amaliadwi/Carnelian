<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['produk'];
$nim = $_POST['jumlah'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update pesanan set produk='$produk', jumlah='$jumlah', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:indexx.php");
 
?>