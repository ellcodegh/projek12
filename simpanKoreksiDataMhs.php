<?php
include "koneksi.php";

$id             = $_POST['id'];
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$tempatLahir    = $_POST['tempatLahir'];
$tanggalLahir   = $_POST['tanggalLahir'];
$jmlSaudara     = $_POST['jmlSaudara'];
$alamat         = $_POST['alamat'];
$kota           = $_POST['kota'];
$jenisKelamin   = $_POST['jenisKelamin'];
$statusKeluarga = $_POST['statusKeluarga'];
$hobi           = isset($_POST['hobi']) ? implode(",", $_POST['hobi']) : "";
$email          = $_POST['email'];

$query = mysqli_query($koneksi, "
    UPDATE mhs SET
        nim='$nim',
        nama='$nama',
        tempatLahir='$tempatLahir',
        tanggalLahir='$tanggalLahir',
        jmlSaudara='$jmlSaudara',
        alamat='$alamat',
        kota='$kota',
        jenisKelamin='$jenisKelamin',
        statusKeluarga='$statusKeluarga',
        hobi='$hobi',
        email='$email'
    WHERE id='$id'
");

if ($query) {
    header("Location: tampilDataMhs.php");
} else {
    echo "Gagal menyimpan data!";
}
?>
