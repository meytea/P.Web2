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