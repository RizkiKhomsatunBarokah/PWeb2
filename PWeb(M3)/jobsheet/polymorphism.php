<?php
//definisi kelas person
class person{
    //protected properti yang ada di dalam kelas person
    protected $nama;

    //construct
    public function __construct($nama){
        $this->nama = $nama;
    }

    //metode untuk mendapatkan nilai dari properti nama
    public function getNama(){
        return $this->nama;
    }
}

//definisi kelas student yang merupakan turunan dari kelas person
class student extends person{
    //private properti yang ada di dalam kelas student
    private $studentID;

    //construct 
    public function __construct($nama, $studentID){
        parent:: __construct($nama); //memanggil construct dari kelas person
        $this->studentID = $studentID;
    }

    //metode untuk mendapatkan nilai properti nama
    public function getNama(){
        return "Student: " . $this->nama;
    }

    //metode untuk mendapatkan nilai dari properti studentID
    public function getStudentID(){
        return $this->studentID;
    }
}

//definisi kelas teacher yang merupakan turunan dari kelas person
class Teacher extends person {
    //private properti yang ada di dalam kelas teacher
    private $teacherID;

    //construct 
    public function __construct($nama, $teacherID){
        parent:: __construct($nama); //memanggil construct yang ada di dalam kelas person
        $this->teacherID = $teacherID;
    }

    //metode untuk mendapatkan nilai dari properti nama
    public function getNama(){
        return "Teacher: " . $this->nama;
    }

    //metode untuk mendaptkan nilai dari properti teacherID
    public function getTeacherID(){
        return $this->teacherID;
    }
}

//membuat objek dari kelas student dan teacher
$student1 = new student("Rizki Khomsatun", "230102022");
$teacher1 = new Teacher("Rina Nur", "230102021");

// Menampilkan data student
echo $student1->getNama() . "<br>"; 
echo "Student ID: " . $student1->getStudentID() . "<br><br>";

// Menampilkan data teacher
echo $teacher1->getNama() . "<br>"; 
echo "Teacher ID: " . $teacher1->getTeacherID() . "<br>";
?>