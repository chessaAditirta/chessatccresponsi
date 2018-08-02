<?php
$databaseHost = "{Tambahkan IP Anda Disini}:7306";
$databaseName = "tabel";
$databaseUsername = "root";
$databasePassword = "redvelvet";

// $mysqli=mysqli_connect($databaseHost, $databaseName, $databasePassword);
// if(!$mysqli)
//     die("Gagal Koneksi . . . ");
// $hasil=mysqli_select_db($mysqli, $databaseName);
// if(!$hasil){
//     $hasil=mysqli_query($mysqli, "CREATE DATABASE $databaseName");
//     if(!$hasil)
//         die("Gagal Buat Database");
//     else
//         $hasil=mysqli_select_db($mysqli, $databaseName);
//     if(!$hasil) die("Gagal konek Database");
// }
// $sqltblpdt="create table if not exists pendaftar (
//     `id` int(11) NOT NULL auto_increment,
//     `nama` varchar(100) NOT NULL,
//     `sekolah` varchar(100) NOT NULL,
//     `umur` int(3) NOT NULL,
//     `email` varchar(100) NOT NULL,
//     `alamat` varchar(100) NOT NULL,
//     PRIMARY KEY  (`id`) )";

// mysqli_query($mysqli, $sqltblpdt) or die("Gagal Buat Tabel Pendaftar");
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(!$mysqli)
    die("Gagal Koneksi . . . "); 
?>