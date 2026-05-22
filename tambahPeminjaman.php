<?php
include 'koneksi.php';
?>

<form action="prosespeminjaman.php" method="POST">

    <label>Anggota</label><br>

    <select name="id_anggota">

        <?php
        $sqlanggota = "SELECT * FROM anggota";
        $resultanggota = mysqli_query($conn, $sqlanggota);

        while ($a = mysqli_fetch_assoc($resultanggota)) {
            ?>

            <option value="<?= $a['id']; ?>">
                <?= $a['nama']; ?>
            </option>

            <?php
        }
        ?>

    </select>

    <br><br>

    <label>Buku</label><br>

    <select name="id_buku">

        <?php
        $sqlbuku = "SELECT * FROM buku";
        $resultbuku = mysqli_query($conn, $sqlbuku);

        while ($b = mysqli_fetch_assoc($resultbuku)) {
            ?>

            <option value="<?= $b['id']; ?>">
                <?= $b['judul']; ?>
            </option>

            <?php
        }
        ?>

    </select>

    <br><br>

    Tanggal Pinjam</label><br>
    <input type="date" name="tanggal_pinjam"><br><br>

    <button type="submit">Simpan</button>

</form>