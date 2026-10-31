<?php
declare(strict_types=1);

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Custom Function 1: Menghitung total jam bermain.
 */
function hitungTotalJamBermain(array $games): int {
    $jamArray = array_column($games, 'jam_main');
    return array_sum($jamArray);
}

/**
 * Custom Function 2: Menghitung total jumlah koleksi game.
 */
function hitungTotalGame(array $games): int {
    return count($games);
}

/**
 * Custom Function 3: Menentukan kelas CSS untuk badge status.
 */
function getBadgeClass(string $status): string {
    return match ($status) {
        'Tamat'            => 'badge-success',
        'Sedang Dimainkan' => 'badge-warning',
        'Belum Tamat'      => 'badge-danger',
        default            => 'badge-secondary',
    };
}