<?php
//deklarasi kelas abstracct dari pengguna
abstract class pengguna {
    //construct
    public function __construct(){
    }
    //metode abstrak 'aksesFitur' yang tidak memiliki implementasi dalam kelas abstrak dan harus di implementasikan dalam kelas turunannya
    abstract public function aksesFitur();
}

//definisi kelas mahasiswa yang merupakan turunan dari kelas abstrak pengguna
class mahasiswa extends pengguna{
    //construct
    public function __construct(){
    }
    //implementasi dari metode abstrak 'aksesFitur' yang di definisikan dalam kelas pengguna
    public function aksesFitur(){
        return "Lihat Pengguna - ";
    }
}

//definisi kelas dosen yang merupakan turunan dari kelas pengguna
class dosen extends pengguna{
    //construct
    public function __construct(){
    }
    //implementasi dari metode abstrak 'aksesFitur' yang di definisikan dalam kelas pengguna
    public function aksesFitur(){
        return "kembali ke halaman sebelumnya";
    }
}

//membuat array $lihat yang berisi mahasiswa dan dosen
$lihat = [new mahasiswa(), new dosen()];
//melakukan iterasi melalui objek dalam array $lihat dan memanggil metode 'aksesFitur'
foreach ($lihat as $akses){
    echo $akses->aksesFitur();
}
?>