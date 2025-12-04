<?php
require_once __DIR__ . '/Mahasiswa.php';

class MahasiswaRepository {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Mengambil semua data mahasiswa
    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mengambil data mahasiswa berdasarkan ID
    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Menambah mahasiswa baru
    public function create($data) {
        $stmt = $this->conn->prepare(
            "INSERT INTO mahasiswa (nama, nim, prodi, angkatan, status) 
             VALUES (?, ?, ?, ?, ?)"
        );

        return $stmt->execute([
            $data['nama'],
            $data['nim'],
            $data['prodi'],
            $data['angkatan'],
            $data['status']
        ]);
    }

    // Update data mahasiswa
    public function update($id, $data) {
        $stmt = $this->conn->prepare(
            "UPDATE mahasiswa 
             SET nama = ?, nim = ?, prodi = ?, angkatan = ?, status = ? 
             WHERE id = ?"
        );

        return $stmt->execute([
            $data['nama'],
            $data['nim'],
            $data['prodi'],
            $data['angkatan'],
            $data['status'],
            $id
        ]);
    }

    // Hapus mahasiswa
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
