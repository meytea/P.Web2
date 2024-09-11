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