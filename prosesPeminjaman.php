<?php
require_once "koneksi.php";

$id_anggota = $_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];

$sql = "INSERT INTO peminjaman(id_anggota,id_buku,tanggal_pinjam)
VALUES('$id_anggota','$id_buku','$tanggal_pinjam')";

if (mysqli_query($conn, $sql)) {

    header("refresh:3;url=index.php");
    echo "<p>Data berhasil disimpan.</p>";
} else {
     echo "<p>Ups, gagal : " . mysqli_error($conn) . "</p>";
}
?>