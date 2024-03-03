<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
try {
    if ($aksi == "tambah") {
        $db->input($_POST['nama'], $_POST['email'], $_POST['whatsapp'], $_POST['alamat']);
        header("location: index.php");
    } elseif ($aksi == "hapus") {
        $db->hapus($_GET['id']);
        header("location: index.php");
    } elseif ($aksi == "update") {
        $db->update($_POST['id'], $_POST['nama'], $_POST['email'], $_POST['alamat'], $_POST['whatsapp']);
        header("location: index.php");
    }
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
