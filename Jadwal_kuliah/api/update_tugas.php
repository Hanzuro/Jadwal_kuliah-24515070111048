<?php
include_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idx = intval($_POST['idx'] ?? -1);
    $status = $_POST['status'] ?? '';
    $tugas = loadData('tugas.json');
    if ($idx >= 0 && $idx < count($tugas) && in_array($status, ['belum','ongoing','selesai'])) {
        $tugas[$idx]['status'] = $status;
        saveData('tugas.json', $tugas);
    }
}
header('Location: index.php');
exit;
