<h2>JobSheet 3</h2>

<h3>Penerapan masing-masing konsep OOP</h3>

<h3>1. Inheritance</h3>
Inheritance (pewarisan) dalam Object-Oriented Programming (OOP) adalah mekanisme yang memungkinkan sebuah class (subclass/child class) untuk mewarisi atribut dan metode dari class lain (superclass/parent class). Ini berarti subclass dapat menggunakan properti dan perilaku (fungsi) dari parent class tanpa perlu mendefinisikannya kembali. Subclass juga dapat menambahkan atau mengubah perilaku dengan cara yang spesifik untuk subclass tersebut.

```php
<?php
    class Person {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
    }

    class Student extends Person {
        public $studentID;

        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }
        
        public function getStudentID(){
        return $this->studentID;
        }
    }

    $student = new Student ("Meilita Ayu Nur Khasanah", 230102038);

    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID();
?>
```
output : 

<h3>2. Polymorphism</h3>
Polymorphism dalam Object-Oriented Programming (OOP) adalah konsep yang memungkinkan objek dari class yang berbeda untuk diakses melalui interface yang sama. Secara harfiah, polymorphism berarti "banyak bentuk," dan dalam OOP, ini berarti objek yang berbeda dapat merespon cara yang berbeda terhadap metode yang sama.

```php
<?php
    class Person {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
    }

    class Student extends Person {
        public $studentID;

        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }
        
        public function getStudentID(){
            return $this->studentID;
        }

    }

    class Teacher extends Person {
        public $teacherID;

        public function __construct($name, $teacherID) {
            parent::__construct($name);
            $this->teacherID = $teacherID;
        }

        public function getName() {
            return $this->name;
        }

        public function getTeacherID() {
            return $this->teacherID;
        }
    }

    $student = new Student ("Meilita Ayu Nur Khasanah", 230102038);
    $teacher = new Teacher ("Agus Purnomo", 199213127128);

    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID();
    echo "<br><hr>";
    echo "Name : " . $teacher->getName();
    echo "<br>";
    echo "Teacher ID : " . $teacher->getTeacherID();
?>
```
Output :


<h3>3. encapsulation</h3>
Encapsulation dalam Object-Oriented Programming (OOP) adalah konsep yang digunakan untuk menyembunyikan detail internal dari sebuah objek dan hanya memberikan akses terbatas kepada data melalui metode khusus yang disebut getter dan setter. Ini memastikan bahwa data dalam objek tidak dapat diakses langsung dari luar, sehingga hanya dapat dimanipulasi dengan cara yang telah ditentukan oleh objek tersebut.

```php
<?php
    class Person {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }
       
        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }
    }

    class Student extends Person {
        private $studentID;

        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }

        public function setStudentID($studentID) {
            $this->studentID = $studentID;
        }
        
        public function getStudentID(){
            return $this->studentID;
        }

        public function getName() {
            return parent::getName();
        }

    }

    
    $student = new Student ("Meilita Ayu Nur Khasanah", 230102038);
    echo "<b>Sebelum Di Ubah</b><br>";
    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID();
    echo "<br><hr>";
    
    $student->setName("Agus Purnomo");
    $student->setStudentID(199211238248);

    echo "<b>Setelah Di Ubah</b><br>";
    echo "Name : " . $student->getName();
    echo "<br>";
    echo "Student ID : " . $student->getStudentID(); 
?>
?>
```

Output : 

<h3>4. Abstraction</h3>
Abstraction dalam Pemrograman Berorientasi Objek (OOP) adalah konsep yang memungkinkan kita untuk menyembunyikan detail implementasi dan hanya menampilkan fungsionalitas yang relevan kepada pengguna. Tujuannya adalah untuk mengurangi kompleksitas dan memungkinkan kita untuk berfokus pada interaksi antar objek daripada detail internalnya.

```php
<?php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;
    protected $instructor;

    public function __construct($courseName, $instructor) {
        $this->courseName = $courseName;
        $this->instructor = $instructor;
    }

    // Metode abstrak
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse mengimplementasikan getCourseDetails()
class OnlineCourse extends Course {
    private $platform;
    private $duration; // Durasi dalam minggu

    public function __construct($courseName, $instructor, $platform, $duration) {
        parent::__construct($courseName, $instructor);
        $this->platform = $platform;
        $this->duration = $duration;
    }

    public function getCourseDetails() {
        return "Course: {$this->courseName}, Instructor: {$this->instructor}, Platform: {$this->platform}, Duration: {$this->duration} weeks (Online)";
    }
}

// Kelas OfflineCourse mengimplementasikan getCourseDetails()
class OfflineCourse extends Course {
    private $location;
    private $schedule; // Jadwal dalam bentuk string

    public function __construct($courseName, $instructor, $location, $schedule) {
        parent::__construct($courseName, $instructor);
        $this->location = $location;
        $this->schedule = $schedule;
    }

    public function getCourseDetails() {
        return "Course: {$this->courseName}, Instructor: {$this->instructor}, Location: {$this->location}, Schedule: {$this->schedule} (Offline)";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse("Web Development", "John Doe", "Udemy", 8);
$offlineCourse = new OfflineCourse("Graphic Design", "Jane Smith", "Room 101, Art Building", "Mon-Wed-Fri, 9AM-12PM");

echo $onlineCourse->getCourseDetails();
echo "<br>";
echo $offlineCourse->getCourseDetails();
?>

```
Output :

