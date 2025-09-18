<?php
include_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matkul = $_POST['matkul'] ?? '';
    $hari = $_POST['hari'] ?? '';
    $jam = $_POST['jam'] ?? '';
    $ruangan = $_POST['ruangan'] ?? '';
    $dosen = $_POST['dosen'] ?? '';
    $sks = $_POST['sks'] ?? '';
    // Validasi
    if ($matkul && $hari && $jam && $ruangan && $dosen && $sks) {
    $jadwal = loadData('jadwal.json');
        $jadwal[] = [
            'matkul' => $matkul,
            'hari' => $hari,
            'jam' => $jam,
            'ruangan' => $ruangan,
            'dosen' => $dosen,
            'sks' => $sks
        ];
        saveData('jadwal.json', $jadwal);
    }
}
header('Location: index.php');
exit;
