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
    <title>Katalog Koleksi Game Steam</title>
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
</head>
<body>

    <header>
        <h1>Katalog Koleksi Game </h1>
        <nav>
            <a href="index.php">Profil</a> | 
            <a href="katalog.php">Katalog Game</a>
        </nav>
    </header>

    <main>
        <section class="summary-card">
            <h2>Ringkasan Koleksi</h2>
            <p>Menampilkan total <strong><?= e((string)$totalGame); ?></strong> game dengan total waktu bermain <strong><?= e((string)$totalJam); ?> Jam</strong>.</p>
        </section>

        <section>
            <h2>Daftar Game (Klik kartu untuk melihat deskripsi)</h2>
            <br>
            <div class="game-grid">
                <?php foreach ($gameList as $game): ?>
                    <article class="game-card" onclick="bukaModal('<?= e(addslashes($game['judul'])); ?>', '<?= e(addslashes($game['deskripsi'])); ?>', '<?= e($game['gambar']); ?>')">
                        <div class="game-img-wrapper">
                            <img src="<?= e($game['gambar']); ?>" alt="Cover Game <?= e($game['judul']); ?>">
                        </div>
                        <div class="game-info">
                            <h3><?= e($game['judul']); ?></h3>
                            <p class="genre"><strong>Genre:</strong> <?= e($game['genre']); ?></p>
                            <p><strong>Jam Bermain:</strong> <?= e((string)$game['jam_main']); ?> Jam</p>
                            <p><strong>Rating:</strong> ⭐ <?= e((string)$game['rating']); ?> / 5.0</p>
                            <p class="status-container">
                                <strong>Status:</strong> 
                                <span class="badge <?= e(getBadgeClass($game['status'])); ?>">
                                    <?= e($game['status']); ?>
                                </span>
                            </p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <div id="gameModal" class="modal" onclick="tutupModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <span class="close-btn" onclick="tutupModal()">&times;</span>
            <img id="modalImg" src="" alt="Cover Game">
            <h2 id="modalJudul"></h2>
            <hr><br>
            <p id="modalDeskripsi"></p>
        </div>
    </div>

    <script>
        function bukaModal(judul, deskripsi, gambar) {
            document.getElementById('modalJudul').innerText = judul;
            document.getElementById('modalDeskripsi').innerText = deskripsi;
            document.getElementById('modalImg').src = gambar;
            document.getElementById('gameModal').style.display = 'flex';
        }

        function tutupModal() {
            document.getElementById('gameModal').style.display = 'none';
        }
    </script>

    <footer>
        <p>&copy; <?= date('Y'); ?> Proyek Mini UTS Pemrograman Web - Tiga Serangkai University</p>
    </footer>

</body>
</html>