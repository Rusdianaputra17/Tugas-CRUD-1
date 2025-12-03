HEAD

<?php

class MahasiswaController {
    private $repo;

    public function __construct($repo) {
        $this->repo = $repo;
    }

    // Menampilkan semua data mahasiswa
    public function index() {
        return $this->repo->getAll();
    }

     // Menampilkan 1 mahasiswa berdasarkan ID
    public function show($id) {
        return $this->repo->getById($id);
    }

    // Menyimpan data mahasiswa baru
    public function store($data) {
        return $this->repo->create($data);
    }
}
8eebe1e (proses menampilkan 1 mahasiswa berdasrkan ID)
