<?php
require_once "koneksi.php";

$sql = "SELECT peminjaman.id,
anggota.nama,
buku.judul,
peminjaman.tanggal_pinjam
FROM peminjaman
INNER JOIN anggota
ON peminjaman.id_anggota = anggota.id
INNER JOIN buku
ON peminjaman.id_buku = buku.id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>607062500008 Gabriel Neil</title>
<style>
body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
        
            color: #333;
        }
        .write-diary-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px auto;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 18px;
            border: 2px solid #0056b3;
            text-align: center;
            max-width: 200px
        }
        .write-diary-button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .write-diary-button:active {
            transform: translateY(1px);
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .empty-message {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
    </style>
</head>
<body>

<center><h2>Data Peminjaman</h2></center>

<a href="index.php">Home</a> 
<br>
<a href="tambahpeminjaman.php">Tambah Peminjaman</a>

<br><br>

<?php
if(mysqli_num_rows($result) > 0){
?>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Nama Anggota</th>
    <th>Judul Buku</th>
    <th>Tanggal Pinjam</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['judul']; ?></td>
    <td><?= $row['tanggal_pinjam']; ?></td>
</tr>

<?php
}
?>

</table>

<?php
}else{
    echo "Belum ada data peminjaman";
}
?>

</body>
</html>