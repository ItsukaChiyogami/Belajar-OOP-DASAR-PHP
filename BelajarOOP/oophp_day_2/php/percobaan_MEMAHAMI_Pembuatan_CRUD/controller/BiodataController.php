<?php
require_once '../db/config.php';
require_once '../repository/BiodataRepository.php';
require_once '../service/BiodataService.php';

$db = new Database();
$conn = $db->getConnection();

$biodataRepository = new BiodataRepository($conn);
$biodataService = new BiodataService($biodataRepository);

if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $pekerjaan = $_POST['pekerjaan'];
    $pendidikan = $_POST['pendidikan'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $status_pernikahan = $_POST['status_pernikahan'];

    $biodataService->addBiodata($nama, $usia, $alamat, $jenis_kelamin, $pekerjaan, $pendidikan, $no_telepon, $email, $status_pernikahan);
    header("Location: ../html/index.php"); // Redirect to index page
    exit();
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $biodataService->deleteBiodata($id);
    header("Location: ../html/index.php"); // Redirect to index page
    exit();
}

// Fetch all biodata for display
$biodataList = $biodataService->getAllBiodata();
?>
