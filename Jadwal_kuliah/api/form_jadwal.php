<h2>Tambah Jadwal Kuliah</h2>
<form method="post" action="proses_jadwal.php">
    <input type="text" name="matkul" placeholder="Nama Mata Kuliah" required>
    <input type="text" name="hari" placeholder="Hari (Senin, Selasa, ...)" required>
    <input type="text" name="jam" placeholder="Jam" required>
    <input type="text" name="ruangan" placeholder="Ruangan" required>
    <input type="text" name="dosen" placeholder="Dosen Pengampu" required>
    <input type="number" name="sks" placeholder="SKS" min="1" required>
    <button type="submit">Tambah Jadwal</button>
</form>
