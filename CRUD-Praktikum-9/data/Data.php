<?php
require_once __DIR__ . '/../db/Koneksi.php';

class Data
{
  private $conn;

  public function __construct()
  {
    $db = new Koneksi();
    $this->conn = $db->getKoneksi();
  }

  public function tampil()
  {
    return $this->conn->query("SELECT * FROM artefak");
  }

  public function tambah($nama, $asal, $tahun, $kondisi, $status)
  {
    $stmt = $this->conn->prepare("SELECT * FROM artefak WHERE nama_artefak=? AND negara_asal=? AND tahun_ditemukan=?");
    $stmt->bind_param("ssi", $nama, $asal, $tahun);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      return false;
    }

    $stmt = $this->conn->prepare("INSERT INTO artefak (nama_artefak, negara_asal, tahun_ditemukan, kondisi, status_pajangan) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $nama, $asal, $tahun, $kondisi, $status);
    return $stmt->execute();
  }

  public function get($id)
  {
    $stmt = $this->conn->prepare("SELECT * FROM artefak WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
  }

  public function ubah($id, $nama, $asal, $tahun, $kondisi, $status)
  {
    $stmt = $this->conn->prepare("UPDATE artefak SET nama_artefak=?, negara_asal=?, tahun_ditemukan=?, kondisi=?, status_pajangan=? WHERE id=?");
    $stmt->bind_param("ssissi", $nama, $asal, $tahun, $kondisi, $status, $id);
    return $stmt->execute();
  }

  public function hapus($id)
  {
    $stmt = $this->conn->prepare("DELETE FROM artefak WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
  }
}
