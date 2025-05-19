<?php
require_once '../data/Data.php';
$data = new Data();

if (isset($_GET['id'])) {
  $data->hapus($_GET['id']);
}
header("Location: ../index.php");
