<?php
//definisi kelas produk
class Produk{
    //properti yang dilindungi dapat di akses oleh kelas itu sendiri dan turunannya
    protected $nama;
    //construct untuk menginisialisasi properti objek saat objek dari kelas dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode untuk mendapatkan nilai dari property nama
    public function getNama(){
        return $this->nama;
    }
}

//definisi kelas buku yang merupakan turunan dati kelas produk
class Buku extends Produk {
    //property khusus untuk kelas buku
    private $penulis;
    //construct untuk kelas buku yang memanggil construct kelas produk
    public function __construct($nama, $penulis){
        parent::__construct($nama);//memanggil onstruct dari kelas produk
        $this->penulis= $penulis;
    }
    //metode mendapatkan nilai propert dari penulis
    public function getPenulis(){
        return $this->penulis;
    }
}
//membuat instance atau objek dari kelas buku
$buku1 = new Buku ("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getNama();
?>


