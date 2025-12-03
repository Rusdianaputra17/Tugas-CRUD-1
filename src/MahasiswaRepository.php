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
>>>>>>> c704169 (memperbaiki file MahasiswaRepository.php)

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
>>>>>>> c704169 (memperbaiki file MahasiswaRepository.php)
}
