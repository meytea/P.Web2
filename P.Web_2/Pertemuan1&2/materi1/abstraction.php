<?php
    // Definisi abstract class Buku
    abstract class Buku {
        private $judul;
        private $penulis;

        public function __construct($judul, $penulis) {
            $this->judul = $judul;
            $this->penulis = $penulis;
        }

        // Method konkrit untuk mendapatkan judul
        public function getJudul() {
            return $this->judul;
        }

        // Abstract method yang harus diimplementasikan oleh subclass
        abstract public function tampilkanInfo();
    }

    // Subclass BukuFiksi yang mengimplementasikan abstract method
    class BukuFiksi extends Buku {
        public function tampilkanInfo() {
            return "Buku Fiksi - Judul: " . $this->getJudul();
        }
    }

    // Subclass BukuNonFiksi yang mengimplementasikan abstract method
    class BukuNonFiksi extends Buku {
        public function tampilkanInfo() {
            return "Buku Non-Fiksi - Judul: " . $this->getJudul();
        }
    }

    // Membuat objek dari masing-masing subclass
    $bukuFiksi = new BukuFiksi("Dunia Khayalan", "Budi Setiawan");
    $bukuNonFiksi = new BukuNonFiksi("Pemrograman PHP", "Andi Prasetyo");

    // Menggunakan metode abstraction untuk menampilkan informasi buku
    echo $bukuFiksi->tampilkanInfo(); // Output: Buku Fiksi - Judul: Dunia Khayalan
    echo "<br>";
    echo $bukuNonFiksi->tampilkanInfo(); // Output: Buku Non-Fiksi - Judul: Pemrograman PHP
?>
