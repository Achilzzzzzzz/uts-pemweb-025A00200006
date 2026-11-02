<?php
declare(strict_types=1);

function e(string $string): string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function hitungTotalGame(array $games): int {
    return count($games);
}

function hitungTotalJamBermain(array $games): int {
    return (int) array_sum(array_column($games, 'jam_main'));
}

function getBadgeClass(string $status): string {
    return match ($status) {
        'Tamat' => 'badge-success',
        'Sedang Dimainkan' => 'badge-playing',
        'Belum Tamat' => 'badge-danger',
        'Gold 1' => 'badge-gold',
        default => 'badge-secondary',
    };
}