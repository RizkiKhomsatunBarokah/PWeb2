<?php
//definisi kelas mobil
class Mobil{
    //properti yang ada di dalam kelas mobil
    public $merk;
    public $warna;

    //construct untuk menginisialisasi propertu objek saat objek dari kelas dibuat
    public function __construct($merk, $warna){
        $this->merk = $merk;
        $this->warna = $warna;
    }
    //Metode publik 'deskripsi' untuk mengembalikan string deskripsi dari objek 'Mobil'.
    public function deskripsi(){
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }
}

//membuat objek baru dari kelas mobil
$mobil = new Mobil ("Toyota", "Hitam");
echo $mobil->deskripsi();
?>