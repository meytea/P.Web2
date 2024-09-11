<?php
    // Definisi class Pengguna (parent class)
    class Pengguna {

        //Atribut atau Properties protect (bisa di akses oleh subclass)
        protected $nama;

        //metode untuk mendapatkan nama pengguna
        public function __construct($nama) {
            $this->nama = $nama;
        }

        //Metode akses fitur 
        public function aksesFitur(){
            return "Akses Fitur ";
        }

    }

    // Definisi class Dosen yang mewarisi class Pengguna
    class Dosen extends Pengguna {
        private $mataKuliah;

        //function Constructor
        public function __construct($nama, $mataKuliah) {
            parent::__construct($nama);
            $this->mataKuliah = $mataKuliah;
        }

        // Override metode aksesFitur untuk Dosen
        public function aksesFitur() {
            echo "Nama : " . $this->nama . "<br>";
            echo "Mata Kuliah : " . $this->mataKuliah . "<br>";
            echo "Fitur Dosen: Mengelola perkuliahan, Mengupload materi, dan menilai <br>";

        }
    }

    // Definisi class Mahasiswa yang mewarisi class Pengguna
    class Mahasiswa extends Pengguna {
        private $jurusan;
        
        //function Constructor
        public function __construct($nama, $jurusan) {
            parent::__construct($nama);
            $this->jurusan = $jurusan;
        }

        // Override metode aksesFitur untuk Mahasiswa
        public function aksesFitur() {
            echo "Nama : " . $this->nama . "<br>";
            echo "Jurusan : " . $this->jurusan . "<br>";
            echo "Fitur Mahasiswa:  Mengikuti kelas, mengerjakan tugas, dan melihat nilai<br>";
        }
    }

    // Instansiasi objek dari class Dosen dan Mahasiswa
    $dosen = new Dosen("Agus Purnono", "Pemrograman Web");
    $dosen->aksesFitur();

    echo "<hr><br>";

    $mahasiswa = new Mahasiswa("Meilita Ayu Nur K", "Komputer dan Bisnis");
    $mahasiswa->aksesFitur();
?>
