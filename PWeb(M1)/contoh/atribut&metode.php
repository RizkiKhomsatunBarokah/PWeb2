<?php
//definisi kelas buku
class Buku{
    //properti yang ada di dalam kelas buku 
    public $judul;
    public $penulis;

    //construct
    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    //metode untuk menampilkan info
    public function tampilkanInfo(){
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}
//membuat instance atau objek dari kelas buku
$buku1 = new Buku("Pemrograman PHP", "John Doe");
echo $buku1->tampilkanInfo();
?>