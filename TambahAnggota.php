<html>
<head>

    <title>607062500008 Gabriel Neil</title>
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
</head>
<body>
    <div class="container">
        <h1>Tambah Anggota Baru</h1>
        <form action="prosesAnggota.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            Nama Lengkap<br/>
            <input type="text" name="nama" size="70" required /><br/><br/>
            
            NIM / NIP<br/>
            <input name="nim_nip" cols="70" rows="10" required></textarea><br/><br/>
            
            Jurusan/Prodi<br/>
            <input type="text" name="jurusan_prodi" rows="10"required /><br/><br/>

            No Telepon<br/>
            <input type="text" name="no_telepon" rows="10"required /><br/><br/>
            
            <input type="submit" value="Simpan" />
        </form>
    </div>
</body>
</html>