<?php
//definisi kelas person
class person{
    //properti protected yang ada di dalam kelas person
    protected $nama;

    //construct
    public function __construct($nama){
        $this->nama = $nama;
    }

    //metode untuk mendapatkan nilai 
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
        parent:: __construct($nama); //memanggil construct yang ada di kelas person
        $this->studentID = $studentID;
    }

    //metode yang digunakan untuk mendapatkan nilai dari studentID
    public function getStudentID(){
        return $this->studentID;
    }

    //metode untuk mengubah studentID
    public function setStudentID($studentID){
        $this->studentID = $studentID;
    }

    //metode untuk mendapatkan nilai dari nama
    public function getNama(){
        return "Student: " . $this->nama;
    }

    //metode untuk mendapatkan nama dengan akses protected
    public function getNamaProtected(){
        return $this->nama;
    }

    //metode untuk mengubah nilai properti
    public function setNama($nama){
        $this->nama = $nama;
    }
}

//membuat objek dari kelas student 
$student1 = new student("Rizki Khomsatun", "230102022");

// menampilkan data yang belum di ubah
echo $student1->getNama() . "<br>"; 
echo "Student ID: " . $student1->getStudentID() . "<br>";

// Mengubah studentID dan nama
$student1->setStudentID("230102021");
$student1->setNama("Rina Nur");

// Menampilkan data setelah di ubah
echo "<br>Data setelah perubahan:<br>";
echo $student1->getNama() . "<br>"; 
echo "Student ID: " . $student1->getStudentID() . "<br>";
?>