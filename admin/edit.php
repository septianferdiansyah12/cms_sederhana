<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM artikel WHERE id=$id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    mysqli_query($conn, "UPDATE artikel SET judul='$judul', isi='$isi' WHERE id=$id");
    header("Location: artikel.php");
}
?>

<h2>Edit Artikel</h2>
<form method="POST">
  Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>"><br>
  Isi: <textarea name="isi"><?= $data['isi'] ?></textarea><br>
  <button type="submit">Update</button>
</form>