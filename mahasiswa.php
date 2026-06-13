<?php
require "koneksi.php";
$qmhs = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($qmhs);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFORMATIKA 2026</title>
    <!-- Menghubungkan ke Bootstrap 5 via CDN agar tampilan langsung otomatis bagus -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar-brand { font-weight: bold; letter-spacing: 1px; }
        .table img { object-fit: cover; border-radius: 8px; }
    </style>
</head>
<body>

    <!-- NAVBAR/MENU YANG SUDAH DIPERBAIKi (Sesuai image_103ac1.png & image_103ac5.png versi modern) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">💻 INFORMATIKA 2026</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item"><a class="nav-link px-3" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="Contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link px-3 active fw-bold text-info" href="mahasiswa.php">Data Mahasiswa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <div class="container my-5">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold text-secondary">Daftar Data Mahasiswa</h2>
            </div>
            <div class="col-md-6 text-md-end">
                <!-- Perbaikan Tag Tombol Tambah Data -->
                <a href="tambahdata.php" class="btn btn-primary shadow-sm">+ Tambah Data Mahasiswa</a>
            </div>
        </div>

        <!-- TABEL DATA MAHASISWA YANG MODERN -->
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" width="60">No</th>
                                <th>Foto</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th class="text-center" width="160">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1; // Membuat nomor urut dinamis berjalan otomatis
                            foreach($mahasiswas as $mhs) {
                                // Catatan: Pastikan index array di bawah ini (nama, nim, dll) 
                                // SAMA PERSIS dengan nama kolom di database MySQL Anda (perhatikan huruf besar/kecilnya).
                                
                                // Solusi pencegahan error Undefined Index:
                                $nama = isset($mhs["nama"]) ? $mhs["nama"] : (isset($mhs["NAMA"]) ? $mhs["NAMA"] : 'Data Kosong');
                                $nim = isset($mhs["nim"]) ? $mhs["nim"] : (isset($mhs["NIM"]) ? $mhs["NIM"] : '-');
                                $jurusan = isset($mhs["jurusan"]) ? $mhs["jurusan"] : (isset($mhs["JURUSAN"]) ? $mhs["JURUSAN"] : '-');
                                $email = isset($mhs["email"]) ? $mhs["email"] : (isset($mhs["EMAIL"]) ? $mhs["EMAIL"] : '-');
                                $no_hp = isset($mhs["no_hp"]) ? $mhs["no_hp"] : (isset($mhs["NO_HP"]) ? $mhs["NO_HP"] : '-');
                                
                                // Mengambil ID utama untuk edit/hapus agar tidak statis angka 2 terus
                                $id_mhs = isset($mhs["id"]) ? $mhs["id"] : $no; 
                            ?>
                            <tr>
                                <td class="text-center fw-bold text-muted"><?= $no++; ?></td>
                                <td>
                                    <!-- Menampilkan foto secara rapi kotak proporsional -->
                                    <img src="Asets/Image/Anjay.jpg" alt="Foto" width="65" height="65" class="shadow-sm border border-2 border-white">
                                </td>
                                <td class="fw-semibold text-primary"><?= $nim; ?></td>
                                <td class="fw-bold text-dark"><?= $nama; ?></td>
                                <td><span class="badge bg-secondary opacity-75"><?= $jurusan; ?></span></td>
                                <td class="text-muted"><?= $email; ?></td>
                                <td><?= $no_hp; ?></td>
                                <td class="text-center">
                                    <!-- ID Diubah menjadi dinamis mengikuti record data -->
                                    <a href="editdata.php?id=<?= $id_mhs; ?>" class="btn btn-warning btn-sm fw-semibold me-1">Edit</a>
                                    <a href="hapusdata.php?id=<?= $id_mhs ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm fw-semibold">Hapus</a>
                                </td> 
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap 5 JS Bundle (Penting untuk fungsi responsive menu navbar) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>