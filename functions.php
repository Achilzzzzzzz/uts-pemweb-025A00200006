<?php
declare(strict_types=1);

function e(string $string): string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function formatRupiah(int $angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

function getRingkasanKatalog(array $katalog): array {
    $semuaHarga = array_column($katalog, 'harga');
    $totalNilai = array_sum($semuaHarga);
    $totalPaket = count($katalog);
    
    $rataRata = $totalPaket > 0 ? (int)round($totalNilai / $totalPaket) : 0;
    
    return [
        'total_paket' => $totalPaket,
        'rata_rata' => $rataRata
    ];
}