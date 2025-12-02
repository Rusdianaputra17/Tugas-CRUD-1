<?php
require "../config/database.php";
require "../src/MahasiswaRepository.php";
require "../src/MahasiswaController.php";

$db = new Database();
$repo = new MahasiswaRepository($db->connect());
$controller = new MahasiswaController($repo);

$data = $controller->index();
