<?php
require_once '../data/Data.php';
$data = new Data();
$id = $_GET['id'];
$row = $data->get($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data->ubah($id, $_POST['nama'], $_POST['asal'], $_POST['tahun'], $_POST['kondisi'], $_POST['status']);
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Edit Artefak</title>
  <link rel="stylesheet" href="../styles.css">
</head>

<body>
  <div class="container">
    <h2>Edit Artefak</h2>
    <form method="POST">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $row['nama_artefak'] ?>" required>
      </div>
      <div class="form-group">
        <label for="asal">Asal</label>
        <input type="text" name="asal" id="asal" value="<?= $row['negara_asal'] ?>" required>
      </div>
      <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="number" name="tahun" id="tahun" value="<?= $row['tahun_ditemukan'] ?>" required>
      </div>
      <div class="form-group">
        <label for="kondisi">Kondisi</label>
        <select name="kondisi" id="kondisi">
          <option <?= $row['kondisi'] == 'Baik' ? 'selected' : '' ?>>Baik</option>
          <option <?= $row['kondisi'] == 'Rusak Ringan' ? 'selected' : '' ?>>Rusak Ringan</option>
          <option <?= $row['kondisi'] == 'Rusak Berat' ? 'selected' : '' ?>>Rusak Berat</option>
        </select>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status">
          <option <?= $row['status_pajangan'] == 'Dipajang' ? 'selected' : '' ?>>Dipajang</option>
          <option <?= $row['status_pajangan'] == 'Disimpan' ? 'selected' : '' ?>>Disimpan</option>
        </select>
      </div>
      <div class="form-actions">
        <input type="submit" value="Update" class="btn">
        <a href="../index.php" class="btn cancel">Batal</a>
      </div>
    </form>
  </div>
</body>

</html>