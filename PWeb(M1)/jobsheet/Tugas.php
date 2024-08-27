<?php
//definisi kelas dosen
class dosen{
    //properti yang ada di dalam kelas dosen
    public $nama;
    public $nip;
    public $mataKuliah;

    //construct untuk menginisialisasi properti objek saat objek dari kelas dibuat
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //metode untuk menampilkan dosen
    public function tampilkanDosen(){
        echo "Nama: $this->nama<br> NIP: $this->nip<br> Mata Kuliah: $this->mataKuliah.";
    }
}

//membuat objek baru dari kelas dosen dan menampilkannya.
$dosen1 = new dosen("Rizki Khomsatun", "230102022", "Praktikum Web2");
echo $dosen1->tampilkanDosen();
?>