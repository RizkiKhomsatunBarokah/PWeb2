<?php
//definisi kelas pengguna
class pengguna {
    //construct untuk kelas pengguna yang kosong
    public function __construct(){
    }
    //metode akses fitur yang dapat digunakan
    public function aksesFitur(){
        return "masuk ke web - ";
    }
}

//definisi kelas mahasiswa yang merupakan turunan dari pengguna
class mahasiswa extends pengguna{
    //construct kosong
    public function __construct(){
    }
    //metode akses fitur yang menimpa metode akses fitur dari kelas pengguna
    public function aksesFitur(){
        return "Lihat Pengguna - ";
    }
}

//definisi kelas dosen yang merupakan turunan kelas pengguna
class dosen extends pengguna{
    //construct kosong
    public function __construct(){
    }
    //metode akses fitur yang menimpa metode akses fitur dari kelas pengguna
    public function aksesFitur(){
        return "kembali ke halaman sebelumnya";
    }
}

//membuat array $lihat yang berisi pengguna, mahasisiswa, dan dosen
$lihat = [new pengguna(), new mahasiswa(), new dosen()];
//menggunakan loop foreach untuk setiap objek dalam array
foreach ($lihat as $akses){
    echo $akses->aksesFitur();
};
?>