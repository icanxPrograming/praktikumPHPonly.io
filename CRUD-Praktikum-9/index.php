<?php
require_once './data/Data.php';
$data = new Data();
$hasil = $data->tampil();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Data Artefak Museum</title>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js"></script>
</head>

<body>
  <h1>Data Artefak Museum</h1>
  <a href="config/tambah.php" class="btn">Tambah Artefak</a>
  <table>
    <tr>
      <th>Nama</th>
      <th>Asal</th>
      <th>Tahun</th>
      <th>Kondisi</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
    <?php while ($row = $hasil->fetch_assoc()): ?>
      <tr>
        <td><?= $row['nama_artefak'] ?></td>
        <td><?= $row['negara_asal'] ?></td>
        <td><?= $row['tahun_ditemukan'] ?></td>
        <td><?= $row['kondisi'] ?></td>
        <td><?= $row['status_pajangan'] ?></td>
        <td>
          <a href="config/edit.php?id=<?= $row['id'] ?>" class="btn">Ubah</a>
          <a href="#" onclick="return confirmDelete(<?= $row['id'] ?>)" class="btn delete">Hapus</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>

</html>