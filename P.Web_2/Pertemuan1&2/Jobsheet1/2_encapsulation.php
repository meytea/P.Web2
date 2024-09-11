<?php

    //Definisi Class Mahasiswa dengan encapsulatiin
    class Mahasiswa {

        //Atribut atau Properties private (tidak bisa di akses langsung dari luar class)
        private $nama;
        private $nim;
        private $jurusan;

        //Metode atau Function
        //Getter dan Setter untuk atribut nama
        public function getNama(){
            return "Nama : $this->nama";
        }

        public function setNama($nama) {
            $this->nama = $nama;
        }

        //Getter dan Setter untuk atribut nim
        public function getNim(){
            return "NIM : $this->nim";
        }
 
        public function setNim($nim) {
            $this->nim = $nim;
        }

        //Getter dan Setter untuk atribut jurusan
        public function getJurusan(){
            return "Jurusan : $this->jurusan";
        }

        public function setJurusan($jurusan) {
            $this->jurusan = $jurusan;
        }
    }

    //Instansiasi Objek dari class Mahasiswa menggunakan setter
    $mahasiswa = new Mahasiswa(); //"Meilita Ayu Nur Khasanah", "230102038", "Komputer dan Bisnis"
    $mahasiswa->setNama("Meilita Ayu Nur Khasanah");
    $mahasiswa->setNim ("230102038");
    $mahasiswa->setJurusan ("Komputer dan Bisnis");

    //Mengakses metode getter
    echo $mahasiswa->getNama();
    echo "<br>";
    echo $mahasiswa->getNim();
    echo "<br>";
    echo $mahasiswa->getJurusan();
    echo "<br>";
    echo "<br>";

    //Mengakses dan mengubah data menggunakan setter
    $mahasiswa->setNama ("Meilita Ayu Nur Khasanah");
    $mahasiswa->setNim ("230102038");
    $mahasiswa->setJurusan ("Teknik Informatika");
    echo "<b>Data Setelah Di Ubah</b><br>";

    //Mengakses metode getter
    echo $mahasiswa->getNama();
    echo "<br>";
    echo $mahasiswa->getNim();
    echo "<br>";
    echo $mahasiswa->getJurusan();
?>
