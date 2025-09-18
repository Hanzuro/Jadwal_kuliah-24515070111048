<?php
include_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idx = intval($_POST['idx'] ?? -1);
    $jadwal = loadData('jadwal.json');
    if ($idx >= 0 && $idx < count($jadwal)) {
        array_splice($jadwal, $idx, 1);
        saveData('jadwal.json', $jadwal);
    }
}
header('Location: index.php');
exit;
