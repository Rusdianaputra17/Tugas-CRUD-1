<?php
require "../config/database.php";
require "../src/MahasiswaRepository.php";
require "../src/MahasiswaController.php";

$db = new Database();
$repo = new MahasiswaRepository($db->connect());
$controller = new MahasiswaController($repo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->store($_POST);
    header("Location: index.php");
    exit;
}
?>
    <h2>Tambah Mahasiswa</h2>

    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <label>Prodi:</label>
        <select name="prodi">
            <option>Informatika</option>
            <option>Sistem Informasi</option>
            <option>Teknik Komputer</option>
        </select>

        <label>Angkatan:</label>
        <input type="number" name="angkatan" required>

        <label>Status:</label>
        <select name="status">
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
        </select>

        <button type="submit" class="btn">Simpan</button>
    </form>