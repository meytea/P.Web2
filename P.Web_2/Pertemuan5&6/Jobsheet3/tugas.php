<?php
// Membuat Parent class Person (Inheritance)
class Person {
    protected $name;

    //Membuat metode Construct
    public function __construct($name) {
        $this->name = $name;
    }

    // Membuat metode getRole yang akan di override oleh dosen dan mahasiswa(Polymorphism)
    public function getRole() {
        return "Person";
    }

    // Membuat metode 
    public function getName() {
        return $this->name;
    }
}

// Kelas Dosen mewarisi dari Person
class Dosen extends Person {

    // Mmebuat atribut nidn private (Encapsulation)
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Getter dan Setter untuk NIDN
    public function getNidn() {
        return $this->nidn;
    }

    public function setNip($nidn) {
        $this->nidn = $nidn;
    }

    // Membuat Override getRole untuk Dosen (Polymorphism)
    public function getRole() {
        return "Dosen";
    }
}

// Membuat class Mahasiswa mewarisi dari Person
class Mahasiswa extends Person {
    // Membuat nim sebagai atribut private (Encapsulation)
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Getter dan Setter untuk NIM
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    //  Override getRole untuk Mahasiswa (Polymorphism)
    public function getRole() {
        return "Mahasiswa";
    }
}

// Membuat class abstrak Jurnal (Abstraction)
abstract class Jurnal {
    protected $title;

    public function __construct($title) {
        $this->title = $title;
    }

    // Metode abstrak untuk pengajuan jurnal
    abstract public function submit();
}

// Kelas JurnalDosen mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    private $nidn;

    public function __construct($title, $nidn) {
        parent::__construct($title);
        $this->nidn = $nidn;
    }

    public function submit() {
        return "Judul Jurnal :'{$this->title}' <br>Diajukan oleh NIDN: {$this->nidn}";
    }
}

// Kelas JurnalMahasiswa mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($title, $nim) {
        parent::__construct($title);
        $this->nim = $nim;
    }

    public function submit() {
        return " Judul Jurnal : '{$this->title}' <br> Diajukan oleh NIM: {$this->nim}";
    }
}

// Contoh penggunaan 
$dosen = new Dosen("Ahmad Suryadi, S.Kom, M.Kom", "1989127612628");

echo "<b>Dosen</b><br>
        Name: " . $dosen->getName() . "<br> 
        Penulis: " . $dosen->getRole() . "<br> 
        NIDN: " . $dosen->getNidn(). "<br>";
$jurnalDosen = new JurnalDosen("Research on AI", $dosen->getNidn());
echo $jurnalDosen->submit();
echo "<br><hr>";


$mahasiswa = new Mahasiswa("Meilita Ayu Nur Khasanah", "230102038");
echo "<b>Mahasiswa</b><br>
        Name: " . $mahasiswa->getName() . "<br>
        Penulis: " . $mahasiswa->getRole() . "<br>
        NIM: " . $mahasiswa->getNim(). "<br>";

// Pengajuan jurnal Mahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Final Project on Web Development", $mahasiswa->getNim());


echo $jurnalMahasiswa->submit();
?>
