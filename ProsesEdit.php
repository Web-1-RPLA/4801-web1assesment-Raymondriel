<?php
require_once "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim_nip = $_POST['nim_nip'];
$jurusan_prodi = $_POST['jurusan_prodi'];
$no_telepon = $_POST['no_telepon'];

$sql = "UPDATE anggota SET nama='$_POST[nama]', nim_nip='$_POST[nim_nip]', jurusan_prodi='$_POST[jurusan_prodi]', no_telepon='$_POST[no_telepon]' WHERE id=$id";

if (mysqli_query($conn, $sql)) {

    header("refresh:3;url=index.php");
    echo "<p>Data berhasil disimpan.</p>";
} else {
     echo "<p>Ups, gagal mengupdate berita: " . mysqli_error($conn) . "</p>";
}
?>





