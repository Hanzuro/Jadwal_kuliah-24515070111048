<?php
include_once 'functions.php';
$tugas = loadData('tugas.json');
?>
<h2>Daftar Tugas</h2>
<table class="list-table">
    <tr><th>Nama Tugas</th><th>Mata Kuliah</th><th>Deadline</th><th>Status</th><th></th></tr>
    <?php foreach ($tugas as $idx => $t): ?>
    <tr class="<?= $t['status'] == 'selesai' ? 'tugas-selesai' : '' ?>">
        <td><?= htmlspecialchars($t['nama_tugas']) ?></td>
        <td><?= htmlspecialchars($t['matkul_tugas']) ?></td>
        <td><?= htmlspecialchars($t['deadline']) ?></td>
        <td>
            <form method="post" action="update_tugas.php" style="display:inline">
                <input type="hidden" name="idx" value="<?= $idx ?>">
                <select name="status" onchange="this.form.submit()" style="min-width:100px">
                    <option value="belum" <?= $t['status']=='belum'?'selected':'' ?>>Belum Dimulai</option>
                    <option value="ongoing" <?= $t['status']=='ongoing'?'selected':'' ?>>Ongoing</option>
                    <option value="selesai" <?= $t['status']=='selesai'?'selected':'' ?>>Selesai</option>
                </select>
            </form>
        </td>
        <td>
            <form method="post" action="hapus_tugas.php" style="display:inline">
                <input type="hidden" name="idx" value="<?= $idx ?>">
                <button type="submit" onclick="return confirm('Hapus tugas ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
