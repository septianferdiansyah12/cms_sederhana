<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tgl = date('Y-m-d');
    mysqli_query($conn, "INSERT INTO artikel (judul, isi, tanggal) VALUES ('$judul', '$isi', '$tgl')");
    header("Location: artikel.php");
}
?>

<h2>Tambah Artikel</h2>
<form method="POST">
  Judul: <input type="text" name="judul"><br>
  Isi: <textarea name="isi"></textarea><br>
  <button type="submit">Simpan</button>
</form>