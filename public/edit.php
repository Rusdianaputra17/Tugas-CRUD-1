<?php
require "../config/database.php";
require "../src/MahasiswaRepository.php";
require "../src/MahasiswaController.php";

$db = new Database();
$repo = new MahasiswaRepository($db->connect());
$controller = new MahasiswaController($repo);

// Ambil ID yang dikirim dari index
$id = $_GET['id'];

// Ambil data mahasiswa berdasarkan ID
$data = $controller->show($id);

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->update($id, $_POST);
    header("Location: index.php");
    exit;
}
?>
    <h2>Edit Data Mahasiswa</h2>

    <form method="POST">

        <label>Nama</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

        <label>NIM</label>
        <input type="text" name="nim" value="<?= $data['nim'] ?>" required>

        <label>Prodi</label>
        <select name="prodi">
            <option <?= $data['prodi'] == "Informatika" ? "selected" : "" ?>>Informatika</option>
            <option <?= $data['prodi'] == "Sistem Informasi" ? "selected" : "" ?>>Sistem Informasi</option>
            <option <?= $data['prodi'] == "Teknik Komputer" ? "selected" : "" ?>>Teknik Komputer</option>
        </select>

        <label>Angkatan</label>
        <input type="number" name="angkatan" value="<?= $data['angkatan'] ?>" required>

        <label>Status</label>
        <select name="status">
            <option value="aktif" <?= $data['status'] == "aktif" ? "selected" : "" ?>>Aktif</option>
            <option value="nonaktif" <?= $data['status'] == "nonaktif" ? "selected" : "" ?>>Nonaktif</option>
        </select>

        <button type="submit" class="btn">Update</button>
    </form>

