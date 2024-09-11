<?php
    // Definisi class abstrak Pengguna sebagai parent class
    abstract class Pengguna {
        protected $nama;  // Atribut atau property


        // Constructor untuk menginisialisasi nama
        public function __construct($nama) {
            $this->nama = $nama;
        }

        // Metode abstrak aksesFitur (harus diimplementasikan di child class)
        abstract protected function aksesFitur();
        
    }

    // Definisi class Mahasiswa yang mengimplementasikan class Pengguna
    class Mahasiswa extends Pengguna {

        private $jurusan;     //Atribut tambahan untuk class Mahasiswa

        //function Constructor
        public function __construct($nama, $jurusan) {
            parent::__construct($nama); //Memanggil nama yang ada di parent class
            $this->jurusan = $jurusan;
        }
        //Implementasi metode aksesFitur untuk Mahasiswa
        public function aksesFitur() {
            echo "Nama : " . $this->nama . "<br>";
            echo "Jurusan : " . $this->jurusan . "<br>";
            echo "Fitur Mahasiswa: Mengikuti kelas, mengerjakan tugas, dan melihat nilai<br>";
        }
    } 

    // Definisi class Mahasiswa yang mengimplementasikan class Pengguna
    class Dosen extends Pengguna {

        private $mataKuliah; //Atribut tambahan untuk class Dosen

        //function Constructor
        public function __construct($nama, $mataKuliah) {
            parent::__construct($nama);
            $this->mataKuliah = $mataKuliah;
        }

         //Implementasi metode aksesFitur untuk Mahasiswa
         public function aksesFitur() {
            echo "Nama : " . $this->nama . "<br>";
            echo "Mata Kuliah : " . $this->mataKuliah . "<br>";
            echo "Fitur Dosen: Mengelola perkuliahan, Mengupload materi, dan menilai <br>";

        }     
    }

    // Instansiasi objek dari class Mahasiswa dan Dosen
    $mahasiswa = new Mahasiswa( "Meilita Ayu Nur Khasanah", "JKB");

    // Memanggil metode aksesFitur untuk masing-masing objek
    echo " Mahasiswa.<br>";
    $mahasiswa->aksesFitur();

    echo "<hr>";

    $dosen = new Dosen("Agus Purnomo", "Pemrograman Web");
    echo "Dosen.<br>";
    $dosen->aksesFitur();
?>
