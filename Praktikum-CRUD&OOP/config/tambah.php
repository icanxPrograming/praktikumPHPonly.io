<?php
require_once '../data/Data.php';
$data = new Data();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data->tambah($_POST['nama'], $_POST['asal'], $_POST['tahun'], $_POST['kondisi'], $_POST['status']);
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Tambah Artefak</title>
  <link rel="stylesheet" href="../styles.css">
</head>

<body>
  <div class="container">
    <h2>Tambah Artefak</h2>
    <form method="POST">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
      </div>
      <div class="form-group">
        <label for="asal">Asal</label>
        <input type="text" name="asal" id="asal" required>
      </div>
      <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="number" name="tahun" id="tahun" required>
      </div>
      <div class="form-group">
        <label for="kondisi">Kondisi</label>
        <select name="kondisi" id="kondisi">
          <option>Baik</option>
          <option>Rusak Ringan</option>
          <option>Rusak Berat</option>
        </select>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status">
          <option>Dipajang</option>
          <option>Disimpan</option>
        </select>
      </div>
      <div class="form-actions">
        <input type="submit" value="Simpan" class="btn">
        <a href="../index.php" class="btn cancel">Batal</a>
      </div>
    </form>

  </div>
</body>

</html>