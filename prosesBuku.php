<?php
require_once "koneksi.php";

$kode_buku = $_POST['kode_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah_stok = $_POST['jumlah_stok'];

$sql = "INSERT INTO buku (kode_buku,judul,pengarang,tahun_terbit,jumlah_stok) VALUES ('$kode_buku', '$judul', '$pengarang',$tahun_terbit,$jumlah_stok)";

if (mysqli_query($conn, $sql)) {
    echo "<p>Buku Berhasil Disimpan </p>";
    header("refresh:2;url=index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>