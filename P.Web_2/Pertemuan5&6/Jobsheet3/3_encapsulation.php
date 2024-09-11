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