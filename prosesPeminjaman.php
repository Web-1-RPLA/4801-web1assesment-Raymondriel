<?php
require_once "koneksi.php";

$id_anggota = $_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];

$sql = "INSERT INTO peminjaman(id_anggota,id_buku,tanggal_pinjam)
VALUES('$id_anggota','$id_buku','$tanggal_pinjam')";

mysqli_query($conn, $sql);

header("Location: peminjaman.php");
?>