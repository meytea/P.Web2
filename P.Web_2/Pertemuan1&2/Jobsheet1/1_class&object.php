<?php
    //Definisi Class Mahasiswa
    Class Mahasiswa {

        //Atribut atau Properties
        public $nama;
        public $nim;
        public $jurusan;

        //Constructor untuk menginisialisasi atribut
        // public function __construct($nama, $nim, $jurusan) {
        //     $this->nama = $nama;
        //     $this->nim = $nim;
        //     $this->jurusan = $jurusan;
        // }

        //Metode  atau Function untuk menampilkan data
        public function tampilkanData() {
            return "Nama Mahasiswa : $this->nama <br>
            NIM : $this->nim <br>
            Jurusan : $this->jurusan";
        }
    }

    //Instansiasi  Objek dari class mahasiswa
    $mahasiswa = new Mahasiswa ("Meilita Ayu Nur Khasanah", "230102038", "Komputer dan Bisnis");
    $mahasiswa->nama ="Meilita Ayu Nur Khasanah";
    $mahasiswa->nim ="230102038";
    $mahasiswa->jurusan ="Komputer dan Bisnis";


    //Menampilkan data mahasiswa menggunakan metode tampilkanData()
    echo $mahasiswa->tampilkanData();
?>