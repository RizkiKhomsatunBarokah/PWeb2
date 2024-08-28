# PWEB2
## MODUL1
## jobsheet modul1 
### 1. Membuat class dan object
class itu sendiri memiliki arti sebuah template atau blueprint yang digunakan untuk membuat suatu objek. sementara Object itu sendiri adalah instansiasi dari class dan memiliki akses ke atribut dan metode yang di definisikan oleh class. 
```php
<?php
class Mahasiswa{
public $nama;
public $nim;
public $jurusan;
}
?>
```
dari kodingan di atas kita dapat mengetahui bahwa yang termasuk class adalah 'Mahasiswa' dan properti yang ada di dalamnya adalah 'nama,nim,jurusan'. jika kita ingin membuat kodingan secara lengkap yaitu sebagai berikut 

![Screenshot (506)](https://github.com/user-attachments/assets/1e6dfd5b-eb6e-4d05-a47f-b8a1232e4f2a)


### 2. Implementasi Construct 
construct itu adalah sebuah sebuah fungsi untuk menginisialisasi sebuah objek ketika objek itu dibuat. berikut saya berikan potongan koding construct 
```php
public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
```
Dalam contoh yang saya berikan menjelaskan bahwa ada fungsi construct yang memiliki parameter $nama $nim $jurusan kemudian di inisialisasikan di bawahnya. 
contoh lebih jelasnya akan saya cantumkan

![Screenshot (507)](https://github.com/user-attachments/assets/f1823e66-89c7-4861-9eea-973d1523e5fc)


dari contoh yang saya berikan di dalamnya terdpaat kelas Mahasiswa dan memiliki beberapa properti kemudian kita melakukan fungsi construct yang digunakan untuk menginisialisasi objek saat objek dibuat dengan parameter $nama, $nim, $jurusan. kemudian kita menggunakan fungsi untuk menampilkan sebuah data. 
```php
public function tampilkanData(){
        return "Nama: $this->nama, NIM: $this->nim, Jurusan $this->jurusan";
    }
```
dibagian akhir kita melakukan instansi objek dari kelas Mahasiswa yang berada di atas serta mencetak apa yang berada di dalam fungsi tampilData
```php
$mahasiswa1 = new mahasiswa("Rizki Khomsatun", "230102022", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
```

### 3. Membuat metode Tambahan updateJurusan
setelah kita bisa membuat kelas object dan melakukan implementasi fungsi construct sampai dengan menampilkan sebuah data, maka kita bisa melakukan metode tambahan yaitu dengan fungsi updateJurusan. 
```php
public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
```
dengan menggunakan metode update jurusan kita bisa melakukan update jurusan. kita akan update jurusan dengan menggunakan sintaks berikut
```php
$mahasiswa1->updateJurusan("Sistem Informasi");
```

lebih jelaskan akan saya berikan full code beserta output yang akan dihasilkan saat melakukan update jurusan

```php
<?php
//definisi kelas mahasiswa
class mahasiswa {
    //properti yang ada di dalam kelas mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //construct untuk menginisialisasi properti objek saat objek dari kelas dibuat
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //metode untuk menampilkan sebuah data
    public function tampilkanData(){
        echo "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan $this->jurusan <br>";
    }
    //metode untuk update jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

//membuat objek baru dari kelas mahasiswa
$mahasiswa1 = new Mahasiswa("Rizki Khomsatun B", "230102022", "Teknik Informatika");
// menampilkan data yang belum berubah
echo "Data sebelum perubahan jurusan:<br>";
$mahasiswa1->tampilkanData();

// mengubah jurusan
$mahasiswa1->updateJurusan("Sistem Informasi");

// menampilkan data setelah pengubahan
echo "<br>Data setelah update jurusan:<br>";
$mahasiswa1->tampilkanData();
?>

```
![image](https://github.com/user-attachments/assets/90c099b1-73e5-4afd-b383-94e80be15591)

### 4. Penggunaan Atribut dan Metode
kita akan menggunakan fungsi setter sebagai fungsi untuk mengubah sesuatu yang kita inginkan. menambahkan fungsi setter sebagai berikut:
```php
public function setNim($nimNew){
        $this->nim = $nimNew;
    }
```
$this->nim = $nimNew; 

digunakan untuk menetapkan nilai dari parameter $nimNew ke properti nim dari objek tersebut. serta untuk mengubahnya kita bisa menggunakan perintah 
```php
$mahasiswa1->setNim("230102021");
```
dengan menggunakan perintah ini maka nim akan mengalami perubahan pada saat di cetak. untuk lebih jelasnya saya akan memberikan full code dan output yang akan di hasilkan.
```php
<?php
class mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function tampilkanData(){
        echo "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan $this->jurusan <br>";
    }
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
    public function setNim($nimNew){
        $this->nim = $nimNew;
    }
}
$mahasiswa1 = new Mahasiswa("Rizki Khomsatun B", "230102022", "Teknik Informatika");
echo "Data sebelum perubahan jurusan:<br>";
$mahasiswa1->tampilkanData();
$mahasiswa1->setNim("230102021");
echo "<br>Data setelah update jurusan:<br>";
$mahasiswa1->tampilkanData();
?>
```
![image](https://github.com/user-attachments/assets/c0a4237c-98a7-415f-a5e3-77abcaee82c8)


### 5. Tugas
Dalam tugas ini kita akan mengimplementasikan kelas dosen dengan atribut nama, nip dan mata kuliah. pertama kita akan membuat class dosen dengan menggunakan sintaks
```php
class Dosen{
}
```
setelah kita sudah membuat kelas dosen kita akan menambahkan atribut di dalamnya
```php
class Dosen{
    public $nama;
    public $nip;
    public $mataKuliah;
}
```
dengan menggunakan perintah-perintah di atas kita sudah mengimplementasikan kelas dosen dengan atirbut nama, nip dan mata kuliah. langkah selanjutnya yaitu kita harus membuat metode tampil dosen. sebelum kita membuat metode tampil dosen maka kita akan membuat fungsi construct terlebih dahulu 
```php
public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
```
dengan menggunakan fungsi construct kita dapat menginisialisasi properti objek saat objek dari kelas dibuat. setelah fungsi construct telah dibuat maka selanjutnya kita bisa membuat metode tampilDOsen
```php
public function tampilkanDosen(){
        echo "Nama: $this->nama<br> NIP: $this->nip<br> Mata Kuliah: $this->mataKuliah.";
    }
```
dengan menggunakan perintah ini maka kita telah membuat sebuah metode untuk menampilkan dosen. setelah kita berhasil membuat metode ini maka kita harus bisa menampilkan hasil dengan membuat objek dari kelas 
```php
$dosen1 = new dosen ("Rizki Khomsatun", "230102022", "praktikum web2");
```
kemudian kita akan menampilkannya dengan menggunakan perintah 
```php
echo $dosen1->tampilDosen();
```

supaya lebih jelasnya akan saya berikan full code beserta outputnya
```php
<?php
class dosen{
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    public function tampilkanDosen(){
        echo "Nama: $this->nama<br> NIP: $this->nip<br> Mata Kuliah: $this->mataKuliah.";
    }
}

$dosen1 = new dosen("Rizki Khomsatun", "230102022", "Praktikum Web2");
echo $dosen1->tampilkanDosen();
?>
```
![image](https://github.com/user-attachments/assets/915c4341-8c4c-4d6c-b6a6-760b2197c2c2)

