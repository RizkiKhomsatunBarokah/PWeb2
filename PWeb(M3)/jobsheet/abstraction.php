<?php
//definisi kelas abstrak course
abstract class course{
    //metode abstrak yang harus di implementasikan oleh kelas turunannya
    abstract public function getCourseDetails();
}

//kelas OnlineCourse yang merupakan turunan dari kelas course 
class OnlineCourse extends Course{
    //properti private yang ada di dalam kelas OnlineCourse
    private $coursenama;
    private $platform;

    //construct
    public function __construct($coursenama, $platform){
        $this->coursenama = $coursenama;
        $this->platform = $platform;
    }
    
    //implementasi metode getCourseDetails dari kelas abstrak Course
    public function getCourseDetails(){
        return "Online Course: " . $this->coursenama . " - Platform: " . $this->platform;
    }
}

//definisi kelas OfflineCourse yang merupakan turunan dari kelas Course
class OfflineCourse extends Course {
    //private properti yang ada di dalam kelas OfflineCourse
    private $coursenama;
    private $location;

    //construct
    public function __construct($coursenama, $location) {
        $this->coursenama = $coursenama;
        $this->location = $location;
    }
    
    //implemetasi metode getCourseDetails dari kelas abstrak Course
    public function getCourseDetails() {
        return "Offline Course: " . $this->coursenama . " - Location: " . $this->location;
    }
}

//membuat objek dari kelas onlinecourse dan offlinecourse
$onlineCourse1 = new OnlineCourse("Praktikum Web2", "academia");
$offlineCourse1 = new OfflineCourse("Pemrograman", "PNC");

//menampilkan detail dari onlinecourse dan offlinecourse
echo $onlineCourse1->getCourseDetails() . "<br>"; 
echo $offlineCourse1->getCourseDetails() . "<br>";
?>