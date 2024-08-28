<?php

//definisi kelas person
class Person {
    //protected properti yang ada di dalam kelas person
    protected $nama;

    //construct untuk menginisialisasi properti
    public function __construct($nama){
        $this->nama = $nama;
    }

    //metode untuk memperoleh niai dari nama
    public function getNama(){
        return $this->nama;
    }

    //metode untuk mendapatkan peran orang tersebut defalutnya adalah 'person'
    public function getRole(){
        return "person";
    }
}

//definisi kelas Dosen yang merupakan turunan dari kelas person
class Dosen extends Person{
    //private properti yang ada didalam kelas dosen
    private $nidn;

    //construct untuk menginisialisasi properti
    public function __construct($nama, $nidn){
        parent:: __construct($nama); //menginisialisasi properti $nama yang diwarisi oleh kelas person
        $this->nidn = $nidn;
    }

    //metode untuk memperoleh nilai Nidn
    public function getNidn(){
        return $this->nidn;
    }

    //metode menimpa getRole untuk mengembalikan "dosen" alih-alih "person"
    public function getRole(){
        return "dosen";
    }
}

//definisi kelas mahasiswa yang merupakan turunan dari kelas person
class Mahasiswa extends Person {
    //private properti yang dimiliki oleh kelas mahasiswa
    private $nim;

    //construct untuk menginisialisasi properti
    public function __construct($nama, $nim){
        parent:: __construct($nama); //menginisialisasi properti $nama yang diwarisi oleh kelas person
        $this->nim = $nim;
    }

    //metode untuk mendapatkan nilai dari Nim
    public function getNim(){
        return $this->nim;
    }

    //menimpa getRole untuk mengembalikan "mahasiswa" alih-alih "person".
    public function getRole(){
        return "mahasiswa";
    }
}

//definisi abstrak dari kelas jurnal
//kelas  abstrak tdk dpt diinstansi dan harus di warisi oleh kelas lain
abstract class Jurnal {
    protected $judul;

    //construct
    public function __construct($judul){
        $this->judul = $judul;
    }

    //implementasi metode abstrak 'pengajuanJurnal' dari kelas Jurnal
    abstract public function pengajuanJurnal(); //kelas lain harus memiliki metode abstrak yang harus di definisikan di kelas turunannya

}

//definisi kelas JurnalMahasiswa yang merupakan turunan dari abstrak kelas jurnal
class JurnalMahasiswa extends Jurnal{
    //construct 
    public function __construct($judul){
        parent:: __construct($judul);
    }
    //implementasi metode abstrak 'pengajuanJurnal' dari kelas jurnal
    public function pengajuanJurnal(){
        return "Mengajukan Jurnal dengan judul $this->judul ";
    }
}

class JurnalDosen extends Jurnal{
    //construct 
    public function __construct($judul){
        parent:: __construct($judul);
    }
    //implementasi metode abstrak 'pengajuanJurnal' dari kelas Jurnal
    public function pengajuanJurnal(){
        return "Mengajukan Jurnal dengan judul $this->judul";
    }
}

//membuat objek dari kelas dosen dan menampilkannya
$dosen1 = new Dosen ("Rizki Khomsatun Barokah", "230102022");
echo $dosen1->getNama() . " adalah seorang " . $dosen1->getRole() . "<br>";
echo "NIDN: " . $dosen1->getNidn() . "<br>";

//membuat objek JurnalDosen dan menampilkannya
$jurnalDosen1 = new JurnalDosen("Analisa Penggunaan bahan makanan");
echo $jurnalDosen1->pengajuanJurnal() . "<br><br>";

// Membuat objek Mahasiswa dan menampilkannya
$mahasiswa1 = new Mahasiswa("Rina Nur", "230102021");
echo $mahasiswa1->getNama() . " adalah seorang " . $mahasiswa1->getRole() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";

// Membuat objek JurnalMahasiswa dan menampilkannya
$jurnalMahasiswa1 = new JurnalMahasiswa("Analisa Produk Pengembangan Lingkungan");
echo $jurnalMahasiswa1->pengajuanJurnal() . "<br>";


?>