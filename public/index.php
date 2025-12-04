<?php
require "../config/database.php";
require "../src/MahasiswaRepository.php";
require "../src/MahasiswaController.php";

$db = new Database();
$repo = new MahasiswaRepository($db->connect());
$controller = new MahasiswaController($repo);
$data = $controller->index();
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Daftar Mahasiswa</h2>

    <a href="create.php" class="btn">+ Tambah Mahasiswa</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($data as $m): ?>
        <tr>
            <td><?= $m['id'] ?></td>
            <td><?= $m['nama'] ?></td>
            <td><?= $m['nim'] ?></td>
            <td><?= $m['prodi'] ?></td>
            <td><?= $m['angkatan'] ?></td>
            <td><?= $m['status'] ?></td>
            <td class="action">
                <a href="edit.php?id=<?= $m['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $m['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
