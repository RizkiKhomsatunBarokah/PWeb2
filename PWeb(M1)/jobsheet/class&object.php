<?php
//definisi kelas mahasiswa
class mahasiswa{
    //properti yang ada di dalam kelas mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //metode untuk menampilkan sebuah data
    public function tampilData(){
        echo "Nama: $this->nama, dengan nomor Nim $this->nim, dan jurusan  $this->jurusan.";
    }
}

//membuat objek baru dari kelas mahasiswa
$mahasiswa1 = new mahasiswa();
$mahasiswa1->nama = "Rizki Khomsatun Barokah";
$mahasiswa1->nim = "230102022";
$mahasiswa1->jurusan = "komputer dan Bisnis";

$mahasiswa1->tampilData();
?>