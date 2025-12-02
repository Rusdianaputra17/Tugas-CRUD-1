CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    nim VARCHAR(20) UNIQUE,
    prodi VARCHAR(50),
    angkatan INT,
    status ENUM('aktif','nonaktif')
);