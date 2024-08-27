
<?php
//definisi kelas pengguna
class pengguna {
    //properti iyang dimlindungi dalam kelas pengguna
    protected $nama;

    //construct untuk menginisialisasi properti objek saat objek dari kelas dibuat
    public function __construct($nama){
        $this->nama = $nama;
    }
    //metode untuk mendapatkan nilai properti nama
    public function getNama(){
        return $this->nama;
    }
}

//definisi kelas dosen yang merupakan turunan dari kelas pengguna
class dosen extends pengguna {
    //properti private yang ada di dalam kelas dosen
    private $mataKuliah;

    //construct untuk kelas dosen yang memanggil construct kelas pengguna
    public function __construct($nama, $mataKuliah){
        parent:: __construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    //metode untuk mendapatkan nilai dari properti mataKuliah
    public function getMatakuliah(){
        return $this->mataKuliah;
    }
}
//membuat instance atau objek
$dosen1 = new dosen ("Rizki Khomsatun B", "PWeb2");
echo $dosen1->getNama();
echo "<br/>";
echo $dosen1->getMatakuliah();
?>