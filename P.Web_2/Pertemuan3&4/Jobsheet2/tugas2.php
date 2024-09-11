<?php
    //Membuat Kelas Dosen
    class Dosen {
        //Menambahkan atribut
        public $nama;
        public $nip;
        public $mataKuliah;

        //Membuat metode
        public function tampilkanDosen(){
            return "Nama Dosen   : $this->nama <br>
                    NIP          : $this->nip <br>
                    Mata Kuliah  : $this->mataKuliah";
        }
    }

    //Instansiasi Object
    $dosen1 = new Dosen ();
    $dosen1->nama = "Andi Suripto";
    $dosen1->nip = "10283216140946";
    $dosen1->mataKuliah ="Matematika";

    //Menampilkan informasi
    echo $dosen1->tampilkanDosen();
?>