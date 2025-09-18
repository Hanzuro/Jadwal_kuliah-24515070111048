<?php
include_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_tugas = $_POST['nama_tugas'] ?? '';
    $matkul_tugas = $_POST['matkul_tugas'] ?? '';
    $deadline = $_POST['deadline'] ?? '';
    $status = $_POST['status'] ?? '';

    if ($nama_tugas && $matkul_tugas && $deadline && $status) {
        $tugas = loadData('tugas.json');
        $tugas[] = [
            'nama_tugas' => $nama_tugas,
            'matkul_tugas' => $matkul_tugas,
            'deadline' => $deadline,
            'status' => $status
        ];
        saveData('tugas.json', $tugas);
    }
}
header('Location: index.php');
exit;
