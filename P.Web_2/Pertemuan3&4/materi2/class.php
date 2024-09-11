<?php

    //Definisi Kelas
    Class Mobil {
        //Atribut atau Properties
        public $merk;
        public $warna;

        

        //Metode atau Function
        public function deskripsi() {
            return "Mobil ini adalah $this->merk berwarna $this->warna.";
        }
    }
    
    //Instansisai Object
    $mobil1 = new Mobil ("Toyota", "Hitam");
    echo $mobil1->deskripsi();
?>