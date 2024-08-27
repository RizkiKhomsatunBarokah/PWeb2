<?php
class mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    //constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //metode untuk menampilkan sebuah data. 
    public function tampilkanData(){
        return "Nama: $this->nama, NIM: $this->nim, Jurusan $this->jurusan";
    }
}
//instansiasi objek
$mahasiswa1 = new mahasiswa("Rizki Khomsatun", "230102022", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>