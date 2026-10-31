<?php
declare(strict_types=1);

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function hitungTotalJamBermain(array $games): int {
    $jamArray = array_column($games, 'jam_main');
    return array_sum($jamArray);
}


function hitungTotalGame(array $games): int {
    return count($games);
}


function getBadgeClass(string $status): string {
    return match ($status) {
        'Tamat'            => 'badge-success',
        'Sedang Dimainkan' => 'badge-warning',
        'Belum Tamat'      => 'badge-danger',
        default            => 'badge-secondary',
    };
}