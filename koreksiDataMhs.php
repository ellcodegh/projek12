<?php
include "koneksi.php";

$id = $_GET['kode'];
$query = mysqli_query($koneksi, "SELECT * FROM mhs WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
/* $hobi_tersimpan = explode(",", $data['hobi']); */
$hobi_tersimpan = array_map('trim', explode(",", $data['hobi']));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="profil">
    <h2>Muhammad Rafael Rasya Nasichun</h2>
    <h2>A12.2024.07153</h2>
</div>

<h2>Edit Data Mahasiswa</h2>

<div class="container">
<form action="simpanKoreksiDataMhs.php" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <label>NIM</label>
    <input type="text" name="nim" value="<?= $data['nim'] ?>"><br><br>

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $data['nama'] ?>"><br><br>

    <label>Tempat Lahir</label>
    <input type="text" name="tempatLahir" value="<?= $data['tempatLahir'] ?>"><br><br>

    <label>Tanggal Lahir</label>
    <input type="date" name="tanggalLahir" value="<?= $data['tanggalLahir'] ?>"><br><br>

    <label>Jumlah Saudara</label>
    <input type="number" name="jmlSaudara" value="<?= $data['jmlSaudara'] ?>"><br><br>

    <label>Alamat</label>
    <textarea name="alamat"><?= $data['alamat'] ?></textarea><br><br>

    <label>Kota</label>
    <input type="text" name="kota" value="<?= $data['kota'] ?>"><br><br>

    <label>Jenis Kelamin</label>
    <select name="jenisKelamin">
        <option value="L" <?= ($data['jenisKelamin']=="L")?'selected':'' ?>>Laki-laki</option>
        <option value="P" <?= ($data['jenisKelamin']=="P")?'selected':'' ?>>Perempuan</option>
    </select><br><br>

    <label>Status Keluarga</label>
    <select name="statusKeluarga">
        <option value="B" <?= ($data['statusKeluarga']=="B")?'selected':'' ?>>Belum Menikah</option>
        <option value="K" <?= ($data['statusKeluarga']=="K")?'selected':'' ?>>Sudah Menikah</option>
    </select><br><br>

    <label>Hobi</label>
    <div class = "checkbox-group">
        <div class = "hobi">
            <input type="checkbox" name="hobi[]" value="Membaca"
            <?= in_array("Membaca", $hobi_tersimpan) ? "checked" : "" ?>>
            Membaca
        </div><br>

        <div class = "hobi">
            <input type="checkbox" name="hobi[]" value="Olahraga"
            <?= in_array("Olahraga", $hobi_tersimpan) ? "checked" : "" ?>>
            Olahraga
        </div><br>

        <div class = "hobi">
            <input type="checkbox" name="hobi[]" value="Musik"
            <?= in_array("Musik", $hobi_tersimpan) ? "checked" : "" ?>>
            Musik
        </div><br>

        <div class = "hobi">
            <input type="checkbox" name="hobi[]" value="Traveling"
            <?= in_array("Traveling", $hobi_tersimpan) ? "checked" : "" ?>>
            Traveling
        </div><br><br>
    </div>


    <label>Email</label>
    <input type="email" name="email" value="<?= $data['email'] ?>"><br><br>

    <button type="submit">Simpan Perubahan</button>
    <button type="cancel">Batal<a href="tambahDataMhs.php"></a></button>
</form>
</div>

</body>
</html>
