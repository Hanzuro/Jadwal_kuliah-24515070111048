<?php
include_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idx = intval($_POST['idx'] ?? -1);
    $tugas = loadData('tugas.json');
    if ($idx >= 0 && $idx < count($tugas)) {
        array_splice($tugas, $idx, 1);
        saveData('tugas.json', $tugas);
    }
}
header('Location: index.php');
exit;
