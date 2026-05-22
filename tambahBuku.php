<html>
<head>
    <title>Input Berita</title>
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
        <h1>Tambah Buku Baru</h1>
        <form action="prosesBuku.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            Kode Buku<br/>
            <input type="text" name="kode_buku" size="70" required /><br/><br/>
            
            Judul Buku<br/>
            <input name="judul" cols="70" rows="10" required></textarea><br/><br/>
            
            Pengarang<br/>
            <input type="text" name="pengarang" rows="10"required /><br/><br/>

            Tahun Terbit<br/>
            <input type="date" name="tahun_terbit"><br/><br/>

            Jumlah Stok<br/>
            <input type="text" name="jumlah_stok" rows="10"required /><br/><br/>
            
            <input type="submit" value="Simpan" />
        </form>
    </div>
</body>
</html>