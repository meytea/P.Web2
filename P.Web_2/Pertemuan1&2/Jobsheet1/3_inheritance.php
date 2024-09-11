<?php
    //Definisi class pengguna (parent class)
    class Pengguna {

        //Atribut atau Properties protect (bisa di akses oleh subclass)
        protected $nama;

        //Constructor untuk menginsialisasi atribut
        public function __construct($nama) {
            $this->nama = $nama;
        }

        //metode untuk mendapatkan nama pengguna
        public function getNama() {
            return $this->nama;
        }
    }

    //Definisi class Dosen yang mewarisi/ mengkases class pengguna
    class Dosen extends Pengguna {

        //Atribut tambahan untuk class Dosen
        private $mataKuliah;

        //Memanggil constructor dari parent class
        public function __construct($nama, $mataKuliah) {
            parent::__construct($nama);
            $this->mataKuliah = $mataKuliah;
        }

        //metode untuk mendapatkan mata kuliah
            public function getMatkul() {
                return $this->mataKuliah;
        
        }

        public function tampilDataDosen() {
            echo "Nama Dosen    :" . $this->getNama(). "<br>";
            echo "Mata Kuliah    :" . $this->getMatkul(). "<br>";
        }
    }

    

    //Instansiasi objek dari class Dosen
    $dosen = new Dosen ("Agus Widodo", "Matematika");

    //Menampilkan data nama menggunakan get
    echo $dosen->tampilDataDosen();
?>