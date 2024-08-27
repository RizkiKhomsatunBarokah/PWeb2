<?php
//definisi kelas
class Buku {
    //property yng ada diddalam kelas
    private $judul;
    private $penulis;

    //construct untuk menginisialisasi properti objek saat objek dari kelas dibuat
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    //metode untuk mendapatkan nilai dari judul
    public function getJudul(){
        return $this->judul;
    }
    //metode yang digunakan untuk mengatur nilai dari judul
    public function setJudul($judul){
        $this->judul= $judul;
    }
}
//instance atau objek baru dari kelas buku
$buku1 = new Buku ("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul();
?>