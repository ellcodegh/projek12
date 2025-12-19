<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data (POST)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="profil">
    <h2>Muhammad Rafael Rasya Nasichun</h2>
    <h2>A12.2024.07153</h2>
</div>

<div class="container">    
<h2>Form Input Data Mahasiswa - POST</h2>

    <form action="simpanDataMhs.php" method="POST">

        <label>NIM</label>
        <input type="text" name="nim" id="nim" oninput="cekNIM()">
        <small id="nim_error" class="error"></small>

        <label>Nama</label>
        <input type="text" name="nama" id="nama" onblur="cekNama()">
        <small id="nama_error" class="error"></small>

        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir">

        <label>Jumlah Saudara</label>
        <input type="number" name="jumlah_sdr" >

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir">

        <label>Alamat</label>
        <textarea name="alamat" rows="4"></textarea>

        <label>Umur</label>
        <input type="number" name="umur" id="umur" onblur="cekUmur()">
        <small id="umur_error" class="error"></small>

        <label>Kota</label>
        <select name="kota">
            <option>Semarang</option>
            <option>Solo</option>
            <option>Salatiga</option>
            <option>Kudus</option>
            <option>Pekalongan</option>
        </select><br><br>

        <label>Jenis Kelamin</label>
        <div class="radio-group">
            <div class ="hobi"><input type="radio" name="jk" value="Laki-laki"> Laki-laki</div>
            <div class ="hobi"><input type="radio" name="jk" value="Perempuan"> Perempuan</div>
        </div><br>

        <label>Status</label>
        <div class="radio-group">
            <div class ="hobi"><input type="radio" name="stat" value="Kawin"> Kawin</div>
            <div class ="hobi"><input type="radio" name="stat" value="Belum_kawin"> Belum Kawin</div>
        </div><br>

        <label>Hobi</label>
        <div class="checkbox-group">
            <div class ="hobi"><input type="checkbox" name="hobi[]" value="membaca"> Membaca</div>
            <div class ="hobi"><input type="checkbox" name="hobi[]" value="olahraga"> Olahraga</div>
            <div class ="hobi"><input type="checkbox" name="hobi[]" value="music"> Music</div>
            <div class ="hobi"><input type="checkbox" name="hobi[]" value="traveling"> Traveling</div>
        </div><br>

        <label>Email</label>
        <input type="email" name="email">
        <input type="password" name="password" required>

        <button type="submit">Kirim</button>
    </form>
</div>

<script>
function cekNIM() {
    const nim = document.getElementById("nim");
    const error = document.getElementById("nim_error");

    if (nim.value.length > 14) {
        error.textContent = "NIM tidak boleh lebih dari 14 karakter";
        nim.classList.add("input-error");
    } else {
        error.textContent = "";
        nim.classList.remove("input-error");
    }
}

function cekNama() {
    const nama = document.getElementById("nama");
    const error = document.getElementById("nama_error");
    const value = nama.value.trim();

    if (value === "") {
        error.textContent = "Nama tidak boleh kosong";
        nama.classList.add("input-error");
    }

    else {
        error.textContent = "";
        nama.classList.remove("input-error");
    }
}

function cekUmur() {
    const umur = document.getElementById("umur");
    const error = document.getElementById("umur_error");
    const value = umur.value.trim();

    if (value === "") {
        error.textContent = "Umur tidak boleh kosong";
        umur.classList.add("input-error");
    }
    else if (value <= 0) {
        error.textContent = "Umur harus lebih dari 0";
        umur.classList.add("input-error");
    }
    else {
        error.textContent = "";
        umur.classList.remove("input-error");
    }
}

</script>

</body>
</html>