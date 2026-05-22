<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM anggota WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Anggota</title>

    <html lang="en">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"], input[type="nama"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="update"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h1 {
            text-align : center;
        }

    
    </style>
<head>
    
<body>


<div class="container">
    <h1>Edit Anggota</h1>

<form action="prosesedit.php" method="POST">

<input type="hidden" name="id" value="<?= $row['id']; ?>">

Nama<br>
<input type="text" name="nama" value="<?= $row['nama']; ?>"><br><br>

NIM<br>
<input type="text" name="nim_nip" value="<?= $row['nim_nip']; ?>"><br><br>

Jurusan/prodi<br>
<input type="text" name="jurusan_prodi" value="<?= $row['jurusan_prodi']; ?>"><br><br>

No Telepon<br>
<input type="text" name="no_telepon" value="<?= $row['no_telepon']; ?>"><br><br>

<button type="submit">Update</button>

</form>
</div>












</body>
</html>