<?php
declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

$totalGame = hitungTotalGame($gameList);
$totalJam = hitungTotalJamBermain($gameList);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kolektor Steam</title>
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
</head>
<body>

    <!-- Header & Navigasi Utama -->
    <header>
        <h1>Profil Koleksi Game Steam</h1>
        <nav>
            <a href="index.php">Profil</a> | 
            <a href="katalog.php">Katalog Game</a>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        <!-- Section Profil Mahasiswa/Kolektor -->
        <section class="profile-card">
            <h2>Identitas Kolektor</h2>
            <hr><br>
            <div class="profile-container">
                <div class="profile-details">
                    <p><strong>Nama Lengkap:</strong> <?= e('Muhammad Chelsa Liwaulhamd'); ?></p>
                    <p><strong>NIM:</strong> <?= e('025A00200006'); ?></p>
                    <p><strong>Kelas:</strong> <?= e('Informatika B'); ?></p>
                    <p><strong>Deskripsi Ringkas:</strong> Dibuat untuk memenuhi tugas Proyek Mini Pemrograman Web. Website ini menampilkan pustaka koleksi game pribadi beserta ringkasan jam bermain dan status penyelesaian game.</p>
                </div>
            </div>
        </section>

        <!-- Section Ringkasan Statistik -->
        <section class="summary-card">
            <h2>Ringkasan Pustaka Game</h2>
            <div class="summary-grid">
                <div class="summary-box">
                    <h3><?= e((string)$totalGame); ?></h3>
                    <p>Total Koleksi Game</p>
                </div>
                <div class="summary-box">
                    <h3><?= e((string)$totalJam); ?> Jam</h3>
                    <p>Total Waktu Bermain</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; <?= date('Y'); ?> Proyek Mini UTS Pemrograman Web - Tiga Serangkai University</p>
    </footer>

</body>
</html>