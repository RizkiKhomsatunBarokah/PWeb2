<?php
//definisi kelas mahasiswa
class mahasiswa {
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
    public function tampilkanData(){
        echo "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan $this->jurusan <br>";
    }
    //metode untuk update jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

//membuat objek baru dari kelas mahasiswa
$mahasiswa1 = new Mahasiswa("Rizki Khomsatun B", "230102022", "Teknik Informatika");
// menampilkan data yang belum berubah
echo "Data sebelum perubahan jurusan:<br>";
$mahasiswa1->tampilkanData();

// mengubah jurusan
$mahasiswa1->updateJurusan("Sistem Informasi");

// menampilkan data setelah pengubahan
echo "<br>Data setelah update jurusan:<br>";
$mahasiswa1->tampilkanData();
?>
