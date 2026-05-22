<?php
require_once "koneksi.php";

$nama = $_POST['nama'];
$nim_nip = $_POST['nim_nip'];
$jurusan_prodi = $_POST['jurusan_prodi'];
$no_telepon = $_POST['no_telepon'];

$sql = "INSERT INTO anggota (nama,nim_nip,jurusan_prodi,no_telepon) VALUES ('$nama', '$nim_nip', '$jurusan_prodi',$no_telepon)";

if (mysqli_query($conn, $sql)) {
    echo "<p>Anggota Berhasil Disimpan </p>";
    header("refresh:2;url=index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>