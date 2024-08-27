<?php
//deinisi kelas mahasiswa
class mahasiswa{
    //properti yang ada di dalam kelas mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //construct untuk menginisialisasi properti objek saat objek dari kelas dibuat
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //metode untuk menampilkan sebuah data
    public function tampilData(){
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}
//membuat instance atau objek dari kelas mahasiswa
$mahasiswa1 = new mahasiswa("Rizki Khomsatun B", "230102022", "Komputer dan Bisnis");
echo $mahasiswa1->tampilData();
?>