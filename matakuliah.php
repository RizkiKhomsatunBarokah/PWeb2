<?php
class Matakuliah{
    public $kodeMk;
    public $namaMatkul;
    public $sks;

    public function tampilMk(){
        return " kode Mk $this->kodeMK . ";
    }
}

class Khs extends MataKuliah{
    public $nilai; 

    public function tampilData(){
        return "Mata Kuliah $this->namaMatkul bernilai: $this->nilai ";
    }
}

$matakuliah1 = new Matakuliah();
$matakuliah1->namaMatkul = "PWeb2";
$matakuliah1->nilai = "99";
$matakuliah1->tampilData;
?>