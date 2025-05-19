CREATE DATABASE db_museuem;

USE db_museum;

CREATE TABLE artefak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_artefak VARCHAR(100),
    negara_asal VARCHAR(100),
    tahun_ditemukan INT,
    kondisi ENUM('Baik', 'Rusak Ringan', 'Rusak Berat'),
    status_pajangan ENUM('Dipajang', 'Disimpan')
);

INSERT INTO artefak (nama_artefak, negara_asal, tahun_ditemukan, kondisi, status_pajangan)
VALUES ('Mahkota Raja Namrud', 'Makkah', 900, 'Rusak Ringan', 'Dipajang');