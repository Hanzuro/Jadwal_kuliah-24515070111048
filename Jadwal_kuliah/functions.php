<?php
function loadData($filename) {
    $path = dirname(__FILE__) . '/data/' . basename($filename);
    if (!file_exists($path)) return [];
    $json = file_get_contents($path);
    return json_decode($json, true) ?: [];
}

function saveData($filename, $data) {
    $path = dirname(__FILE__) . '/data/' . basename($filename);
    file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));
}
