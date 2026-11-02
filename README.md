# Proyek Mini UTS Pemrograman Web - Katalog Game Steam

## 👤 Identitas Pengembang
* **Nama:** Muhammad Chelsa Liwaulhamd
* **NIM:** 025A00200006
* **Kelas:** A2 - 3B

## 📝 Deskripsi Proyek
Website dinamis berbasis PHP murni (tanpa database dan framework) yang menampilkan profil pribadi kolektor serta katalog 8 koleksi game Steam. Proyek ini dilengkapi dengan perhitungan statistik jam bermain, indikator status penyelesaian game (badge), serta fitur modal pop-up untuk melihat deskripsi detail dari setiap game.


## 🚀 Daftar Fitur
1. **Halaman Profil (`index.php`):** Menampilkan data pribadi kolektor, foto profil, dan statistik ringkasan total koleksi.
2. **Halaman Katalog (`katalog.php`):** Menampilkan kartu katalog game lengkap dengan gambar cover, genre, jam bermain, rating, dan status.
3. **Modal Pop-Up Deskripsi:** Fitur interaktif untuk menampilkan narasi/deskripsi lengkap game saat kartu diklik.
4. **Perhitungan Statistik Otomatis:** Perhitungan total game dan akumulasi jam bermain menggunakan fungsi kustom PHP (`count`, `array_column`, `array_sum`).

## 💻 Cara Menjalankan Secara Lokal
1. Pastikan server lokal (Laragon) sudah aktif (Apache & PHP).
2. Pindahkan folder proyek ke direktori web server:
   * **Laragon:** `C:\laragon\www\uts-pemweb-025A00200006-main\`

3. Buka browser dan akses melalui URL:
   ```text
   http://localhost/uts-pemweb-025A00200006-main/index.php

### 📚 Sumber Referensi
1. **Materi Google Classroom / LMS (Pertemuan 1–7):**
   * **Pertemuan 1–2 (HTML5 Semantik & CSS Dasar):** Pembuatan struktur halaman menggunakan `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`, serta aturan Box Model (`box-sizing: border-box`).
   * **Pertemuan 3 (Tata Letak & Responsif):** Pengaturan CSS Grid responsif (`grid-template-columns`), Flexbox, dan efek interaktif `:hover`.
   * **Pertemuan 4 (PHP Dasar & Sintaks):** Deklarasi `declare(strict_types=1);`, variabel bertipe, operator, dan penggabungan kode PHP dalam HTML.
   * **Pertemuan 5 (Struktur Kontrol & Percabangan):** Penggunaan percabangan (`if/else`, `match expression`) untuk penentuan status dan *badge* warna dinamis.
   * **Pertemuan 6 (Array & Perulangan):** Pengolahan data array multidimensi (array asosiatif) dan pencetakan data ke HTML menggunakan perulangan `foreach`.
   * **Pertemuan 7 (Fungsi Kustom & Fungsi Bawaan Array):** Pembuatan fungsi kustom bertipe, implementasi fungsi array bawaan (`count`, `array_column`, `array_sum`), serta sanitasi keamanan output (`htmlspecialchars`).
2. **PHP Manual (php.net):** Referensi dokumentasi resmi sintaks dan fungsi bawaan PHP.
3. **MDN Web Docs:** Referensi standar elemen HTML5 dan Manipulasi DOM JavaScript untuk modal pop-up.

### 🤖 Penggunaan AI
Dalam pengerjaan proyek mini ini, bantuan AI digunakan untuk:
* **Brainstorming & Perancangan:** Membantu penentuan tema koleksi game Steam dan penyusunan struktur array multidimensi pada `data.php`.
* **Refactoring & Clean Code:** Memberikan masukan perbaikan kode berdasarkan *peer review* (penyesuaian warna *badge* status dan optimasi fungsi modal).
* **Dokumentasi & Peer Review:** Membantu menyusun draf lembar review terstruktur dan penulisan dokumen `README.md`.

## 📸 Tangkapan Layar (Screenshot)

### 1. Halaman Profil (`index.php`)
![Halaman Profil](assets/SS-Profil.png)

### 2. Halaman Katalog (`katalog.php`)
![Halaman Katalog](assets/SS-Katalog.png)