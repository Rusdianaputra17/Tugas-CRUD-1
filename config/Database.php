<?php
class Database {
    private $host = "localhost";
    private $db   = "crud_mahasiswa";
    private $user = "root";
    private $pass = "rusdiana87";
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db}",
                $this->user,
                $this->pass
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
        return $this->conn;
    }
}
