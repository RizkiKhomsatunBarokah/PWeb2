<?php
//definisi kelas
class mahasiswa{
    //properti private yang ada di dalam kelas mahasiswa
    private $nama;
    private $nim;
    private $jurusan;

    //construct untuk menginisialisasi properti objek saat objek dari kelas dibuat
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //metode yang digunakan untuk mendapatkan nilai dari properti nama
    public function getNama(){
        return $this->nama;
    }
    //metode untuk mengatur nilai dari properti nama
    public function setNama($nama){
        $this->nama = $nama;
    }

    //metode yang digunakan untuk mendapatkan nilai dari properti nim
    public function getNim(){
        return $this->nim;
    }
    //metode untuk mengatur nilai properti nim
    public function setNim($nim){
        $this->nim = $nim;
    }

    //metode untuk mendapatkan nilai properti jurusan
    public function getJurusan(){
        return $this->jurusan;
    }
    //metode untuk mengatur nilai properti jurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
//memberikan instance atau objek pada kelas mahasiswa
$mahasiswa1 = new mahasiswa ("Rizki Khomsatun Barokah - ", "230102022 - ", "Komputer dan Bisnis");
echo $mahasiswa1->getNama() , $mahasiswa1->getNim() , $mahasiswa1->getJurusan();
?>