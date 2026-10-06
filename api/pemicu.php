<?php
// Menyertakan sistem framework dasar agar fungsi 'kamu' aktif
require_once __DIR__ . '/../vendor/autoload.php';

use Core\Facades\App;
use Core\Console\Kernel;

try {
    echo "Memulai migrasi database...<br>";
    // Memaksa sistem menjalankan perintah 'php kamu migrate' secara internal
    $kernel = new Kernel();
    $status = $kernel->handle(new \Symfony\Component\Console\Input\StringInput('migrate'), new \Symfony\Component\Console\Output\BufferedOutput());

    echo "Status Sukses! Tabel berhasil dibuat di Supabase.<br>";
} catch (\Exception $e) {
    echo "Terjadi kendala: " . $e->getMessage();
}
