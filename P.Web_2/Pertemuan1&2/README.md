<h2>Jobsheet 1 </h2>

<h3>Kelas dan Objek dalam PHP</h3>
<h4>Kelas (Class)</h4>

```php
Class Mahasiswa {
```
- Template/ blueprint untuk membuat instance dari sebuah object
- Class mendefinisikan object
- Menyimpan data dan perilaku yang disebut dengan property dan method

<h4>Object</h4>

```php
$buku1 = new Buku;
```

- Instance yang didefinisikan oleh class
- Banyak object dapat dibuat menggunakan satu class
- Dibuat dengan menggunakan keyword new

<h3>Property dan Method</h3>

<h4>Property</h4>

```php
Class Mahasiswa {
        public $nama;
        public $nim;
        public $jurusan;
}
```

- Memrepresentasikan data/ keadaan dari sebuah object
- Variabel yang ada di dalam object (member variable)
- Jenis - jenis Property :
  - public = atribut yang dapat diakses dari mana saja, baik dalam dari dalam kelas, dari child class (kelas turunan), maupun dari luar kelas.
  - private = atribut yang hanya dapat diakses dari dalam class itu sendiri.
  - protected = atribut yang dapat diakses dari dalam class itu sendiri dan dari dalam child class.

<h4>Method</h4>

```php
public function __construct() {
        }
```
- Merepresentasikan perilaku dari sebuah object
- Function yang ada di dalam object

<h4>Constructor Method</h4>

```php
public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
```

Sebuah method spesial atau khusu yang ada dalam sebuah kelas, method yang otomatis dijalankan ketika sebuah kelas instansiasi atau dibuat objectnya.

<h4>Instansiasi</h4>

```php
    $mahasiswa = new Mahasiswa ("Meilita Ayu Nur Khasanah", "230102038", "Komputer dan Bisnis");

```

- instansiasi adalah proses menciptakan sebuah instance (objek) dari suatu class. Dengan kata lain, ketika sebuah class dibuat, class tersebut hanyalah sebuah blueprint atau template yang mendefinisikan struktur dan perilaku dari objek-objek yang akan dibuat berdasarkan class tersebut. Untuk menggunakan class tersebut, kita harus membuat instance dari class tersebut, yang sering disebut juga sebagai instansi objek.
<h4>Getter dan Setter</h4>

```php
public function getNama(){
            return "Nama : $this->nama";
        }

        public function setNama($nama) {
            $this->nama = $nama;
        }
  ```
- Getter dan setter adalah metode dalam pemrograman berorientasi objek yang digunakan untuk mengakses dan memodifikasi nilai atribut (properties) dari suatu objek, terutama ketika atribut tersebut memiliki akses yang private atau protected.
- Bagian penting dari encapsulation, yang membantu menjaga keamanan dan integritas data dalam objek.

<h4>Menampilkan data</h4>

```php
     echo $mahasiswa->tampilkanData();
```

contoh menampilkan data menggunakan metode yg bernama tampilkanData


<h4>Prinsip-prinsip</h4>

<h3>encapsulation</h3>
Encapsulation adalah prinsip yang digunakan untuk menyembunyikan detail internal dari sebuah objek dan hanya memberikan akses terbatas kepada data melalui metode khusus yang disebut getter dan setter. Ini memastikan bahwa data dalam objek tidak dapat diakses langsung dari luar, sehingga hanya dapat dimanipulasi dengan cara yang telah ditentukan oleh objek tersebut.

```php
 <?php

    //Definisi Class Mahasiswa dengan encapsulatiin
    class Mahasiswa {

        //Atribut atau Properties private (tidak bisa di akses langsung dari luar class)
        private $nama;
        private $nim;
        private $jurusan;

        //Constructor untuk menginsialisasi atribut
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

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
    $mahasiswa = new Mahasiswa("Meilita Ayu Nur Khasanah", "230102038", "Komputer dan Bisnis");

    //Mengakses metode getter
    echo $mahasiswa->getNama();
    echo "<br>";
    echo $mahasiswa->getNim();
    echo "<br>";
    echo $mahasiswa->getJurusan();
    echo "<br>";
    echo "<br>";

    //Mengakses dan mengubah data menggunakan setter
    $mahasiswa->setNama("Khasanah Meilita Ayu");
    $mahasiswa->setNim("230102030");
    $mahasiswa->setJurusan("Teknik Informatika");
    echo "<b>Data Setelah Di Ubah</b><br>";

    //Mengakses metode getter
    echo $mahasiswa->getNama();
    echo "<br>";
    echo $mahasiswa->getNim();
    echo "<br>";
    echo $mahasiswa->getJurusan();
?>
```

Output : 

<h3>Inheritance</h3>
Inheritance (pewarisan) adalah prinsip dalam OOP yang memungkinkan sebuah class (subclass/child class) untuk mewarisi atribut dan metode dari class lain (superclass/parent class). Ini berarti subclass dapat menggunakan properti dan perilaku (fungsi) dari parent class tanpa perlu mendefinisikannya kembali. Subclass juga dapat menambahkan atau mengubah perilaku dengan cara yang spesifik untuk subclass tersebut.

```php
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
```
output : 

<h3>Polymorphism</h3>
Polymorphism dalam Object-Oriented Programming (OOP) adalah konsep yang memungkinkan objek dari class yang berbeda untuk diakses melalui interface yang sama. Secara harfiah, polymorphism berarti "banyak bentuk," dan dalam OOP, ini berarti objek yang berbeda dapat merespon cara yang berbeda terhadap metode yang sama.

```php
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
```
Output :

<h3>Abstraction</h3>
Abstraction dalam Pemrograman Berorientasi Objek (OOP) adalah konsep yang memungkinkan kita untuk menyembunyikan detail implementasi dan hanya menampilkan fungsionalitas yang relevan kepada pengguna. Tujuannya adalah untuk mengurangi kompleksitas dan memungkinkan kita untuk berfokus pada interaksi antar objek daripada detail internalnya.

```php
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
```
Output :


