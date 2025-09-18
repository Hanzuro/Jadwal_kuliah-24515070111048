<h2>Tambah Tugas Kuliah</h2>
<form method="post" action="proses_tugas.php">
    <input type="text" name="nama_tugas" placeholder="Nama Tugas" required>
    <!-- <input type="text" name="matkul_tugas" placeholder="Mata Kuliah" required> -->
    <select name="matkul_tugas">
        <option value="Algoritma & Struktur Data">Algoritma & Struktur Data</option>
        <option value="Data Sains">Data Sains</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
        <option value="Pemrograman Aplikasi Berbasis Web">Pemrograman Aplikasi Berbasis Web</option>
        <option value="Dasar Pengembangan Sistem Informasi">Dasar Pengembangan Sistem Informasi</option>
        <option value="Pemrograman SQL">Pemrograman SQL</option>
        <option value="Administrasi Basis Data">Administrasi Basis Data</option>
    </select>
    <input type="date" name="deadline" required>
    <select name="status">
        <option value="belum">Belum Dimulai</option>
        <option value="ongoing">Ongoing</option>
        <option value="selesai">Selesai</option>
    </select>
    <button type="submit">Tambah Tugas</button>
</form>
