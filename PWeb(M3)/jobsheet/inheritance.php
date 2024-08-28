<?php
//definisi kelas person
class person{
    //protedcted properti 
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
        parent:: __construct($nama); //memanggil construct person
        $this->studentID = $studentID;
    }


    //metode untuk mendapatkan nilai dari studentID
    public function getStudentID(){
        return $this->studentID;
    }
}

//membuat objek dari kelas student
$student1 = new student("Rizki Khomsatun", "230102022");
echo "Nama: " . $student1->getNama() . "<br>"; 
echo "Student ID: " . $student1->getStudentID() . "<br>";
?>