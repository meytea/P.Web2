<?php
    // Definisi class Buku
    class Buku {
        public $judul;
        public $penulis;

        public function __construct($judul, $penulis) {
            $this->judul = $judul;
            $this->penulis = $penulis;
        }

        // Method getJudul
        public function getJudul() {
            return $this->judul;
        }

        public function setJudul($judul) {
            $this->judul = $judul; // Perbaikan dari 'judl' menjadi 'judul'
        }
    }
 
    // Subclass Buku1 yang mengoverride getJudul
    class Buku1 extends Buku {
        public function getJudul() {
            // Memanggil method getJudul dari parent dan mengembalikan nilainya
            return "Buku 1 - Judul: " . parent::getJudul();
        }
    }

    // Membuat objek dari class Buku1
    $buku_1 = new Buku1("Dunia Khayalan", "Budi Setiawan");

    // Output hasil polymorphism
    echo $buku_1->getJudul(); // Output: Buku Fiksi - Judul: Dunia Khayalan
?>
