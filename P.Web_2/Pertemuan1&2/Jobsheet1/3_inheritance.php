<?php
// Definisi class Pengguna (parent class)
class Pengguna {
    // Atribut public (dapat diakses di mana saja)
    public $nama;

    // Metode untuk mendapatkan nama pengguna (getter)
    public function getNama() {
        return $this->nama;
    }
}

// Definisi class Dosen yang mewarisi/mengakses class Pengguna
class Dosen extends Pengguna {
    // Atribut public tambahan untuk class Dosen
    public $mataKuliah;

    // Metode untuk menampilkan data dosen 
    public function tampilDataDosen() {
        echo "Nama Dosen    : " . $this->getNama() . "<br>";
        echo "Mata Kuliah   : " . $this->mataKuliah . "<br>";  // Mengakses atribut langsung
    }
}

// Instansiasi objek dari class Dosen
$dosen = new Dosen();

// Mengakses atribut public langsung dari luar kelas
$dosen->nama = "Agus Widodo";       // Akses langsung ke atribut public
$dosen->mataKuliah = "Matematika";   // Akses langsung ke atribut public

// Menampilkan data dosen
$dosen->tampilDataDosen();
?>
