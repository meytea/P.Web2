<?php
    // Definisi class Pengguna (parent class)
    class Pengguna {
        // Atribut public (dapat diakses langsung dari luar kelas)
        public $nama;

        // Metode akses fitur (akan di-overridden di subclass)
        public function aksesFitur(){
            return "Akses Fitur ";
        }
    }

    // Definisi class Dosen yang mewarisi class Pengguna
    class Dosen extends Pengguna {
        // Tidak ada atribut tambahan

        // Override metode aksesFitur untuk Dosen
        public function aksesFitur() {
            echo "Nama Dosen: " . $this->nama . "<br>";
            echo "Fitur Dosen: Mengelola perkuliahan, Mengupload materi, dan menilai <br>";
        }
    }

    // Definisi class Mahasiswa yang mewarisi class Pengguna
    class Mahasiswa extends Pengguna {
        // Tidak ada atribut tambahan

        // Override metode aksesFitur untuk Mahasiswa
        public function aksesFitur() {
            echo "Nama Mahasiswa: " . $this->nama . "<br>";
            echo "Fitur Mahasiswa: Mengikuti kelas, mengerjakan tugas, dan melihat nilai<br>";
        }
    }

    // Instansiasi objek dari class Dosen dan Mahasiswa tanpa constructor
    $dosen = new Dosen();
    $dosen->nama = "Agus Purnono";          // Mengatur nilai atribut public dari parent class
    $dosen->aksesFitur();

    echo "<hr><br>";

    $mahasiswa = new Mahasiswa();
    $mahasiswa->nama = "Meilita Ayu Nur K"; // Mengatur nilai atribut public dari parent class
    $mahasiswa->aksesFitur();
?>
