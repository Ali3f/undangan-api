<?php
// Mengaktifkan organ tubuh vendor yang sudah di-upload
require_once __DIR__ . '/../vendor/autoload.php';

use Core\Console\Kernel;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\BufferedOutput;

try {
    echo "--- PROSES MIGRASI RESMI AUTHOR DIMULAI ---<br>";
    $kernel = new Kernel();
    $output = new BufferedOutput();

    // Memaksa server menjalankan instruksi "php saya migrate" secara internal
    $kernel->handle(new StringInput('migrate'), $output);

    echo "<pre>" . $output->fetch() . "</pre>";
    echo "<b>100% SUKSES: Semua tabel resmi author telah terbuat di Supabase!</b>";
} catch (\Exception $e) {
    echo "Gagal mengeksekusi framework: " . $e->getMessage();
}
