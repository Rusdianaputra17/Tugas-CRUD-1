<?php
require "../config/database.php";
require "../src/MahasiswaRepository.php";
require "../src/MahasiswaController.php";

$db = new Database();
$repo = new MahasiswaRepository($db->connect());
$controller = new MahasiswaController($repo);

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: index.php");
    exit;
}
$controller->delete($id);
header("Location: index.php");
exit;
?>