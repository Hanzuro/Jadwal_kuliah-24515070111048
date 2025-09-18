<?php
include_once 'functions.php';
$jadwal = loadData('jadwal.json');
$tugas = loadData('tugas.json');

function jadwalHariIni($jadwal) {
    $hariList = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
    $hariIni = $hariList[date('w')];
    $result = [];
    foreach ($jadwal as $j) {
        if ($j['hari'] == $hariIni) $result[] = $j;
    }
    return $result;
}

function totalSKS($jadwal) {
    $total = 0;
    foreach ($jadwal as $j) $total += intval($j['sks']);
    return $total;
}

function tugasMendekatiDeadline($tugas) {
    $result = [];
    $now = strtotime(date('Y-m-d'));
    foreach ($tugas as $t) {
        if ($t['status'] == 'selesai') continue;
        $deadline = strtotime($t['deadline']);
        $diff = ($deadline - $now) / (60*60*24);
        if ($diff <= 2 && $diff >= 0) $result[] = $t;
    }
    return $result;
}
$jadwalToday = jadwalHariIni($jadwal);
$tugasBelum = array_filter($tugas, fn($t) => $t['status'] == 'belum' || $t['status'] == 'ongoing');
$alertTugas = tugasMendekatiDeadline($tugas);
?>
<div id="dashboard">
    <div class="dashboard-content">
        <h2>Dashboard</h2>
        <div class="jadwal-hari-ini">
            <div class="label">Jadwal Hari Ini :</div>
            <div class="list"><?php echo $jadwalToday ? implode('<br>', array_map(fn($j) => $j['matkul'].' ('.$j['jam'].')', $jadwalToday)) : 'Tidak ada jadwal.'; ?></div>
        </div>
        <div><b>Tugas blm kelar :</b> <?php echo count($tugasBelum); ?></div>
        <div><b>Total SKS :</b> <?php echo totalSKS($jadwal); ?></div>
        <div class="jadwal-hari-ini">
            <div class ="label"><b>Tugas DL   &le;2 hari :</b></div>
            <div class = "list"> <?php echo $alertTugas ? '<span class="alert">'.implode('<br>', array_map(fn($t) => $t['nama_tugas'].' ('.$t['deadline'].')', $alertTugas)).'</span>' : 'Tidak ada.'; ?></div>
        </div>
        <!-- <div><b>Alert Tugas Deadline (&le;2 hari):</b> <?php echo $alertTugas ? '<span class="alert">'.implode('<br>', array_map(fn($t) => $t['nama_tugas'].' ('.$t['deadline'].')', $alertTugas)).'</span>' : 'Tidak ada.'; ?></div> -->
    </div>
    <div class="dashboard-image">
        <img src="assets/mungus.gif" alt="mungus">
    </div>
</div>
