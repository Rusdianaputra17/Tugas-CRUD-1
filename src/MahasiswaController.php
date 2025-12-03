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

    // Memperbarui data mahasiswa
    public function update($id, $data) {
        return $this->repo->update($id, $data);
    }

    // Menghapus data mahasiswa berdasarkan ID
    public function delete($id) {
        return $this->repo->delete($id);
    }
}

