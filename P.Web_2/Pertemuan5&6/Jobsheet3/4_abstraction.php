<?php
//Membuat class abstract (sebagai parent class)
abstract class Course {
    protected $courseName;
    protected $instructor;

    //Metode construct
    public function __construct($courseName, $instructor) {
        $this->courseName = $courseName;
        $this->instructor = $instructor;
    }

    //Membuat fungsi atau metode abstract
    abstract public function getCourseDetails();
}

// Membuat child class OnlineCourse 
class OnlineCourse extends Course {
    private $platform;
    private $duration; 

   //Membuat metode construct
    public function __construct($courseName, $instructor, $platform, $duration) {
        parent::__construct($courseName, $instructor);
        $this->platform = $platform;
        $this->duration = $duration;
    }

    public function getCourseDetails() {
        return " <b>Online Course </b><br>
                Course Name: {$this->courseName}<br>
                Instructor: {$this->instructor}<br>
                Platform: {$this->platform}<br> 
                Duration: {$this->duration} weeks ";
    }
}

//Mmebuat child class 
class OfflineCourse extends Course {
    private $location;
    private $schedule; 

    //Membuat metoded constryct
    public function __construct($courseName, $instructor, $location, $schedule) {
        parent::__construct($courseName, $instructor);
        $this->location = $location;
        $this->schedule = $schedule;
    }

    public function getCourseDetails() {
        return "<b> Offline Course </b><br>
                Course Name: {$this->courseName}<br> 
                Instructor: {$this->instructor} <br> 
                Location: {$this->location}<br> 
                Schedule: {$this->schedule} (Offline)";
    }
}

// Contoh penggunaan
$onlineCourse = new OnlineCourse("Junior Web Developer", "Wendi", "Zoom", 8);
$offlineCourse = new OfflineCourse("Junior Network Administration", "Wawan Setiawan", "Auditorium PNC", "20/10/2024");

echo $onlineCourse->getCourseDetails();
echo "<br><hr>";
echo $offlineCourse->getCourseDetails();
?>
