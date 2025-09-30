<?php
$nilai = 90;

echo "<hr>";

echo "Tugas BKPM Hal 121 <br>";

echo "CONTOH IF ELSE <br>";
if ($nilai > 80) {
    echo "Selamat Anda mendapat grade A <br>";
} else {
    echo "Maaf Anda belum dapat grade A <br>";
}

echo "CONTOH SWITCH <br>";
switch ($nilai) {
    case 100:
        echo "Nilai yang dipilih 100 <br>";
        break;
    case 90:
        echo "Nilai yang dipilih 90 <br>";
        break;
}

echo "CONTOH FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Looping FOR ke : " . $i . "<br>";
}

echo "CONTOH WHILE <br>";
$j = 1;
while ($j <= 5) {
    echo "Looping While ke : " . $j . "<br>";
    $j++;
}

echo "<hr>";

echo "Hasil Perulangan dari 100 hingga 1000:<br>";
for ($i = 100; $i <= 1000; $i++) {
    echo $i . "<br>";
}

echo "<hr>";

echo "Kasus Umum Penggunaan Logika Perulangan:<br>";
echo "Pemrosesan Data dalam Jumlah Besar: Mengakses dan memanipulasi setiap item dalam sebuah array, list, atau database. Misalnya, menampilkan semua nama produk dari database toko online.<br>";
echo "Generasi Konten Dinamis: Membuat konten yang berulang secara otomatis, seperti menampilkan daftar item di keranjang belanja, tabel data, atau daftar menu navigasi.<br>";
echo "Validasi Input: Memastikan input pengguna memenuhi kriteria tertentu, seperti memastikan kata sandi memiliki panjang minimal 8 karakter atau berisi kombinasi huruf dan angka.<br>";

echo "<br>";

echo "Kasus Umum Penggunaan Logika Kontrol (if-else, switch):<br>";
echo "Pengecekan Kondisi Tunggal: Menjalankan blok kode tertentu hanya jika suatu kondisi terpenuhi. Contoh: if (umur < 18) { echo \"Anda belum cukup umur\"; }.<br>";
echo "Pemilihan Berdasarkan Nilai Tertentu: Menggunakan switch untuk memilih blok kode yang akan dieksekusi berdasarkan nilai dari sebuah variabel. Ini lebih efisien daripada menggunakan banyak if-else if untuk kasus dengan banyak kemungkinan. Contoh: Menentukan grade nilai (A, B, C, D) dari skor ujian.<br>";
echo "Logika Bisnis: Menerapkan aturan bisnis yang kompleks. Misalnya, memberikan diskon jika total pembelian melebihi Rp 500.000 atau memberlakukan biaya pengiriman berbeda tergantung lokasi pengiriman.<br>";

?>