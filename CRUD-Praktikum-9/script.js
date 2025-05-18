function confirmDelete(id) {
  if (confirm("Yakin ingin menghapus data ini?")) {
    window.location.href = "config/hapus.php?id=" + id;
  }
  return false;
}
