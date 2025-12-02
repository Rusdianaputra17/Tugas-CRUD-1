<?php
require "../config/database.php";
require "../src/MahasiswaRepository.php";
require "../src/MahasiswaController.php";

$db = new Database();
$repo = new MahasiswaRepository($db->connect());
$controller = new MahasiswaController($repo);

$data = $controller->index();
?>

<h2>Daftar Mahasiswa</h2>
<a href="create.php">+ Tambah Mahasiswa</a><br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Prodi</th>
    <th>Angkatan</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php while ($m = $data->fetch(PDO::FETCH_ASSOC)) : ?>
<tr>
    <td><?= $m['id'] ?></td>
    <td><?= $m['nama'] ?></td>
    <td><?= $m['nim'] ?></td>
    <td><?= $m['prodi'] ?></td>
    <td><?= $m['angkatan'] ?></td>
    <td><?= $m['status'] ?></td>
    <td>
        <a href="edit.php?id=<?= $m['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $m['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
