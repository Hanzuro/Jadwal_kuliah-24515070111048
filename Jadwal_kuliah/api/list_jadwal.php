<?php
include_once 'functions.php';
$jadwal = loadData('jadwal.json');

function sortJadwal($jadwal) {
    $hariOrder = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
    usort($jadwal, function($a, $b) use ($hariOrder) {
        $hariA = array_search($a['hari'], $hariOrder);
        $hariB = array_search($b['hari'], $hariOrder);
        if ($hariA !== $hariB) return $hariA - $hariB;
        return strcmp($a['jam'], $b['jam']);
    });
    return $jadwal;
}
$jadwalSorted = sortJadwal($jadwal);
?>
<h2>Jadwal Kuliah</h2>
<table class="list-table">
    <tr><th>Mata Kuliah</th><th>Kelas</th><th>Hari</th><th>Jam</th><th>Ruangan</th><th>Dosen</th><th>SKS</th></tr>
    <?php foreach ($jadwalSorted as $idx => $j): ?>
    <tr>
        <td><?= htmlspecialchars($j['matkul']) ?></td>
        <td><?= htmlspecialchars($j['kelas']) ?></td>
        <td><?= htmlspecialchars($j['hari']) ?></td>
        <td><?= htmlspecialchars($j['jam']) ?></td>
        <td><?= htmlspecialchars($j['ruangan']) ?></td>
        <td><?= htmlspecialchars($j['dosen']) ?></td>
        <td><?= htmlspecialchars($j['sks']) ?></td>
        <!-- <td>
            <form method="post" action="hapus_jadwal.php" style="display:inline">
                <input type="hidden" name="idx" value="<?= $idx ?>">
                <button type="submit" onclick="return confirm('Hapus jadwal ini?')">Hapus</button>
            </form>
        </td> -->
    </tr>
    <?php endforeach; ?>
</table>
