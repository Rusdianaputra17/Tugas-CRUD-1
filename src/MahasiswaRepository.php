<?php
require_once __DIR__ . '/Mahasiswa.php';

class MahasiswaRepository {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c704169 (memperbaiki file MahasiswaRepository.php)
=======
>>>>>>> 481a560 (mengambil semua data mahasiswa)

    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table ORDER BY id DESC");
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("
            INSERT INTO $this->table (nama, nim, prodi, angkatan, status)
            VALUES (:nama, :nim, :prodi, :angkatan, :status)
        ");

        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = :id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 49eea9f (menambahkan fungsi create)
=======

    // UPDATE
    public function update($id, $data) {
        $stmt = $this->conn->prepare("
            UPDATE $this->table SET
                nama = :nama,
                nim = :nim,
                prodi = :prodi,
                angkatan = :angkatan,
                status = :status
            WHERE id = :id
        ");

        $data["id"] = $id;
        return $stmt->execute($data);
    }
<<<<<<< HEAD
>>>>>>> 36a0893 (menambahkan fungsi update)
=======

    // DELETE
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = :id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
>>>>>>> 8a93a0e (menambahkan fungsi delete)
=======
>>>>>>> 5443d5f (memperbaiki file MahasiswaRepository.php)
<<<<<<< HEAD
>>>>>>> c704169 (memperbaiki file MahasiswaRepository.php)
=======
=======

    // Mengambil semua data mahasiswa
    public function getAll() {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
<<<<<<< HEAD
>>>>>>> cc145dc (mengambil semua data mahasiswa)
<<<<<<< HEAD
>>>>>>> 481a560 (mengambil semua data mahasiswa)
=======
=======

    // Mengambil data mahasiswa berdasarkan ID
    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
<<<<<<< HEAD
>>>>>>> 622a03b (mengambil data mahasiswa berdasarkan ID)
<<<<<<< HEAD
>>>>>>> bfb1f13 (mengambil data mahasiswa berdasarkan ID)
=======
=======

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
<<<<<<< HEAD
>>>>>>> 5b8d787 (menambahkan data mahasiswa baru)
<<<<<<< HEAD
>>>>>>> fa9b761 (menambahkan data mahasiswa baru)
=======
=======

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
<<<<<<< HEAD
>>>>>>> af53dc7 (langkah update data mahasiswa)
<<<<<<< HEAD
>>>>>>> 08e1423 (langkah update data mahasiswa)
=======
=======

    // Hapus mahasiswa
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
        return $stmt->execute([$id]);
    }
>>>>>>> c0a9806 (langkah delete data mahasiswa)
>>>>>>> 81af4fc (langkah delete data mahasiswa)
}
