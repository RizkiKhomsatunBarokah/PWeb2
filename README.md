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


## MODUL 2
### JOBSHEET 2
### 1. Membuat Class dan Object
seperti penjelasan di awal class merupakan sebuah template sementara object adalah inisialisasi dari class itu sendiri. 
```php
class Mahasiswa {
}
```
di dalam class ini kita bisa menambahkan beberapa fungsi, yaitu yang pertama kita bisa menambahkan fungsi construct untuk dapat menginisialisasi suatu objek. 
```php
public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
setelah kita sudah menambahkan fungsi construct kita bisa menambahkan fungsi atau metode untuk menampilkan sebuah data, dengan menggunakan perintah berikut :
```php
public function tampilData(){
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
```
setelah kedua fungsi atau metode tersebut terbuat maka kita bisa membuat sebuah objek dari kelas mahasiswa tersebut dengan menggunakan perintah
```php
$mahasiswa1 = new mahasiswa("Rizki Khomsatun B", "230102022", "Komputer dan Bisnis");
```
kemudian kita bisa memanggil data tersebut untuk ditampilkan dengan menggunakan perintah
```php
echo $mahasiswa1->tampilData();
```
setelah melakukan langkah langkah yang telah dijelaskan maka akan menghasilkan full code seperti berikut 
```php
<?php
class mahasiswa{
    //properti yang ada di dalam kelas mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function tampilData(){
        return "Nama: $this->nama, Nim: $this->nim, Jurusan: $this->jurusan";
    }
}
$mahasiswa1 = new mahasiswa("Rizki Khomsatun B", "230102022", "Komputer dan Bisnis");
echo $mahasiswa1->tampilData();
?>
```
![image](https://github.com/user-attachments/assets/da0b3dda-6652-488e-b168-6763977ed80d)




### 2. Membuat Encapsulation
Encapsulation merupakan menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu. lebih singkatnya encapsulation berguna untuk melindungi dan membatasi akses. Dalam encapsulation terdapat visibilitas public, protected, dan privat.

a. Public itu sendiri bisa di akses oleh semua pengguna
```php
public $nama;
```

b. Protected bisa di akses oleh kelas itu sendiri dan kelas turunannya. 
```php
protected $nama;
```

c. Private hanya bisa di akses oleh kelas itu sendiri. 
```php
private $nama;
```
visibilitas akses protected dan private harus menggunakan fungsi atau metode getter dan setter untuk dapat mengambil nilai dan mengubahnya. 

Metode getter dapat digunakan untuk mengambil atau mendapatkan nilai dari sebuah properti yang memiliki visibilitas protected dan private. 
```php
public function getNama(){
        return $this->nama;
    }
```
sementara untuk mengubah atau mengatur sebuah nilai suatu properti yang memiliki visibilitas protected dan private
```php
public function setNama($nama){
        $this->nama = $nama;
    }
```
setelah kita melakukan pengkodingan full maka kita akan membuat instansiasi objek pada kelas tersebut, dengan contoh 
```php
$mahasiswa1 = new mahasiswa ("Rizki Khomsatun Barokah - ", "230102022 - ", "Komputer dan Bisnis");
```
berikut contoh full Code untuk mendeskripsikan encapsulation
```php
<?php
class mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
$mahasiswa1 = new mahasiswa ("Rizki Khomsatun Barokah - ", "230102022 - ", "Komputer dan Bisnis");
echo $mahasiswa1->getNama() , $mahasiswa1->getNim() , $mahasiswa1->getJurusan();
?>
```
![image](https://github.com/user-attachments/assets/9639cc9b-ab98-41f4-9de7-32a5d4309f1c)



### 3. Membuat Inheritance
Inheritance biasanya dikenal dengan pewarisan yaitu kelas dapat mewarisi properti dan metode dari kelas lainnya. Dengan inheritance, kita dapat membuat kelas baru yang memiliki semua karakteristik dari kelas yang sudah ada (kelas induk), sambil menambahkan atau mengubah fitur tambahan. Dalam Inheritance kita memiliki sebuah kelas yang menjadi induk dari kelas lain yang menjadi kelas anak. Ciri- ciri dari kelas anak atau biasa dikenal dengan kelas turunan yaitu dengan adanya kata extends yang menandakan bahwa kelas itu merupakan kelas turunan dari kelas sebelumnya. 
```php
class Dosen extends Pengguna{
}
```
Kelas anak atau kelas turunan dapat menambahkan properti dan metode baru selain yang diwarisi dari kelas induk. Jadi, kelas turunan masih bisa menjadi dirinya sendiri selain mereka mendapatkan apa yang dimiliki oleh induknya. sebagai contoh 
```php
class Dosen extends Pengguna{
      private $mataKuliah;
      public function getMatakuliah(){
          return $this->mataKuliah;
    }
}
```
untuk melakukan pemanggilan metode yang diwariskan oleh induk maka bisa menggunakan perintah sebagai berikut:
```php
public function __construct($nama, $mataKuliah){
        parent:: __construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
```
Dalam code tersebut terdapat 

parent:: __construct ($nama, $mataKuliah)

parent:: __construct itu adalah untuk memanggil metode yang di wariskan oleh induknya, kemudian untuk parameter $nama adalah warisan dari sang induk juga. Sementara Parameter $mataKuliah merupakan properti baru yang ada di dalam kelas turunan tersebut.

sebagai contoh full code beserta outputnya :
```php

<?php
class pengguna {
    //properti iyang dimlindungi dalam kelas pengguna
    protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
}

class dosen extends pengguna {
    //properti private yang ada di dalam kelas dosen
    private $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent:: __construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    public function getMatakuliah(){
        return $this->mataKuliah;
    }
}
$dosen1 = new dosen ("Rizki Khomsatun B", "PWeb2");
echo $dosen1->getNama();
echo "<br/>";
echo $dosen1->getMatakuliah();
?>
```
![image](https://github.com/user-attachments/assets/d9076a64-f0b6-4a50-81e1-704083ba19be)


### 4. Membuat Polymorphism
polymorphism merupakan sebuah metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda. Polymorpshism juga memungkinkan objek-objek dari kelas yang berbeda untuk diakses melalui antarmuka yang sama. Ini berarti metode atau fungsi dapat berperilaku berbeda tergantung pada objek yang memanggilnya. Polymorphism memungkinkan kode lebih fleksibel dan dapat diperluas karena dapat menggunakan metode yang sama pada objek-objek dari kelas yang berbeda. Polymorphism memiliki beberapa keuntungan yaitu salah satunya penyerdehanaan kode, hal ini memudahkan pengembangan dan pemeliharaan kode karena kita tidak perlu menulis kode yang spesifik untuk setiap tipe objek.
kita bisa membuat sebuah metode dalam Class induk yang dimana Class turunannya akan menggunakan metode tersebut. 
```php
class pengguna {
    public function __construct(){
    }
    public function aksesFitur(){
        return "masuk ke web - ";
    }
}

class mahasiswa extends pengguna{
    public function __construct(){
    }
    public function aksesFitur(){
        return "Lihat Pengguna - ";
    }
}
```
Dalam Code di atas Class pengguna memiliki function aksesFitur yang digunakan juga oleh kelas turunannya. function aksesFitur yang berada di dalam Class turunan akan menimpa function aksesFitur di Class sebelumnya. 

Berikut full Code dan outputnya
```php
<?php
class pengguna {
    public function __construct(){
    }
    public function aksesFitur(){
        return "masuk ke web - ";
    }
}

class mahasiswa extends pengguna{
    public function __construct(){
    }
    public function aksesFitur(){
        return "Lihat Pengguna - ";
    }
}
class dosen extends pengguna{
    public function __construct(){
    }
    public function aksesFitur(){
        return "kembali ke halaman sebelumnya";
    }
}

$lihat = [new pengguna(), new mahasiswa(), new dosen()];
foreach ($lihat as $akses){
    echo $akses->aksesFitur();
};
?>
```
![image](https://github.com/user-attachments/assets/eb70ade4-f87d-44cb-890f-340216d5bf26)



### 5. Membuat Abstraction
Abstraction merupakan metode yang Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting. Dengan kata lain, abstraction memungkinkan kita untuk fokus pada “apa yang dilakukan” suatu objek, tanpa perlu tahu “bagaimana” cara kerjanya. Abstraction biasanya memiliki tujuan untuk mengurangi kompleksitas, meningkatkan keamanan data, serta memfasilitasi perubahan dan pemeliharaan kode. Abstraction dilakukan dengan mendefinisikan kelas atau antarmuka yang hanya menampilkan metode atau atribut yang relevan bagi pengguna akhir.
Detail implementasi disembunyikan di balik metode atau atribut ini, sehingga pengguna hanya perlu memahami apa yang objek lakukan, bukan bagaimana cara kerjanya.
```php
abstract class pengguna {
    public function __construct(){
    }
    abstract public function aksesFitur();
}
```
Code di atas merupakan Kelas abstrak yaitu kelas yang tidak dapat diinstansiasi secara langsung. Kelas ini sering digunakan sebagai dasar (base class) untuk kelas lain. Kelas abstrak bisa memiliki metode abstrak (metode yang dideklarasikan tanpa implementasi) dan metode konkret (metode yang memiliki implementasi).

Berikut Full Code beserta Outputnya
```php
<?php
abstract class pengguna {
    //construct
    public function __construct(){
    }
    abstract public function aksesFitur();
}

class mahasiswa extends pengguna{
    public function __construct(){
    }
    public function aksesFitur(){
        return "Lihat Pengguna - ";
    }
}

class dosen extends pengguna{
    public function __construct(){
    }
    public function aksesFitur(){
        return "kembali ke halaman sebelumnya";
    }
}

$lihat = [new mahasiswa(), new dosen()];
foreach ($lihat as $akses){
    echo $akses->aksesFitur();
}
?>
```
![image](https://github.com/user-attachments/assets/f6ac6296-3712-4dca-9bcd-8485ad02e3fa)


## MODUL 3
### JOBSHEET 3
### 1. Membuat Encapsulation
Encapsulation merupakan menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu. lebih singkatnya encapsulation berguna untuk melindungi dan membatasi akses. Dalam encapsulation terdapat visibilitas public, protected, dan privat.

a. Public itu sendiri bisa di akses oleh semua pengguna
```php
public $nama;
```

b. Protected bisa di akses oleh kelas itu sendiri dan kelas turunannya. 
```php
protected $nama;
```

c. Private hanya bisa di akses oleh kelas itu sendiri. 
```php
private $nama;
```
visibilitas akses protected dan private harus menggunakan fungsi atau metode getter dan setter untuk dapat mengambil nilai dan mengubahnya. 

Metode getter dapat digunakan untuk mengambil atau mendapatkan nilai dari sebuah properti yang memiliki visibilitas protected dan private. 
```php
public function getNama(){
        return $this->nama;
    }
```
sementara untuk mengubah atau mengatur sebuah nilai suatu properti yang memiliki visibilitas protected dan private
```php
public function setNama($nama){
        $this->nama = $nama;
    }
```
setelah kita melakukan pengkodingan full maka kita akan membuat instansiasi objek pada kelas tersebut, dengan contoh 
```php
$mahasiswa1 = new mahasiswa ("Rizki Khomsatun Barokah - ", "230102022 - ", "Komputer dan Bisnis");
```
berikut contoh full Code untuk mendeskripsikan encapsulation
```php
<?php
class person{
    protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
}
class student extends person{
    private $studentID;

    public function __construct($nama, $studentID){
        parent:: __construct($nama); //memanggil construct yang ada di kelas person
        $this->studentID = $studentID;
    }
    public function getStudentID(){
        return $this->studentID;
    }
    public function setStudentID($studentID){
        $this->studentID = $studentID;
    }
    public function getNama(){
        return "Student: " . $this->nama;
    }
    public function getNamaProtected(){
        return $this->nama;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
} 
$student1 = new student("Rizki Khomsatun", "230102022");
echo $student1->getNama() . "<br>"; 
echo "Student ID: " . $student1->getStudentID() . "<br>";
$student1->setStudentID("230102021");
$student1->setNama("Rina Nur");
echo "<br>Data setelah perubahan:<br>";
echo $student1->getNama() . "<br>"; 
echo "Student ID: " . $student1->getStudentID() . "<br>";
?>
```
![image](https://github.com/user-attachments/assets/cd75f6a1-dba4-4c70-9f50-efac2d7219da)


### 2. Membuat Inheritance
Inheritance biasanya dikenal dengan pewarisan yaitu kelas dapat mewarisi properti dan metode dari kelas lainnya. Dengan inheritance, kita dapat membuat kelas baru yang memiliki semua karakteristik dari kelas yang sudah ada (kelas induk), sambil menambahkan atau mengubah fitur tambahan. Dalam Inheritance kita memiliki sebuah kelas yang menjadi induk dari kelas lain yang menjadi kelas anak. Ciri- ciri dari kelas anak atau biasa dikenal dengan kelas turunan yaitu dengan adanya kata extends yang menandakan bahwa kelas itu merupakan kelas turunan dari kelas sebelumnya. 
```php
class Sudent extends Person{
}
```
Kelas anak atau kelas turunan dapat menambahkan properti dan metode baru selain yang diwarisi dari kelas induk. Jadi, kelas turunan masih bisa menjadi dirinya sendiri selain mereka mendapatkan apa yang dimiliki oleh induknya.
untuk melakukan pemanggilan metode yang diwariskan oleh induk maka bisa menggunakan perintah sebagai berikut:
```php
class student extends person{
    private $studentID;

    public function __construct($nama, $studentID){
        parent:: __construct($nama);
        $this->studentID = $studentID;
    }
```
Dalam code tersebut terdapat 

parent:: __construct ($nama, $mataKuliah)

parent:: __construct itu adalah untuk memanggil metode yang di wariskan oleh induknya, kemudian untuk parameter $nama adalah warisan dari sang induk juga. Sementara Parameter $mataKuliah merupakan properti baru yang ada di dalam kelas turunan tersebut.

sebagai contoh full code beserta outputnya :
```php
<?php
class person{
    protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
}

class student extends person{
    private $studentID;

    public function __construct($nama, $studentID){
        parent:: __construct($nama); 
        $this->studentID = $studentID;
    }
    public function getStudentID(){
        return $this->studentID;
    }
}
$student1 = new student("Rizki Khomsatun", "230102022");
echo "Nama: " . $student1->getNama() . "<br>"; 
echo "Student ID: " . $student1->getStudentID() . "<br>";
?>
```
![image](https://github.com/user-attachments/assets/c12ba67a-8f5e-44d4-9b7f-1172d2d95931)



### 3. Membuat Polymorphism
polymorphism merupakan sebuah metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda. Polymorpshism juga memungkinkan objek-objek dari kelas yang berbeda untuk diakses melalui antarmuka yang sama. Ini berarti metode atau fungsi dapat berperilaku berbeda tergantung pada objek yang memanggilnya. Polymorphism memungkinkan kode lebih fleksibel dan dapat diperluas karena dapat menggunakan metode yang sama pada objek-objek dari kelas yang berbeda. Polymorphism memiliki beberapa keuntungan yaitu salah satunya penyerdehanaan kode, hal ini memudahkan pengembangan dan pemeliharaan kode karena kita tidak perlu menulis kode yang spesifik untuk setiap tipe objek.
kita bisa membuat sebuah metode dalam Class induk yang dimana Class turunannya akan menggunakan metode tersebut. 
```php
class Person {
    public function __construct(){
    }
    public function aksesJalan(){
        return "Jl. manggis - ";
    }
}

class Warga extends Person{
    public function __construct(){
    }
    public function aksesJalan(){
        return "Jl. Jeruk - ";
    }
}
```
Dalam Code di atas Class pengguna memiliki function aksesFitur yang digunakan juga oleh kelas turunannya. function aksesFitur yang berada di dalam Class turunan akan menimpa function aksesFitur di Class sebelumnya. 

Berikut full Code dan outputnya
```php
<?php
class person{
    protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
}

class student extends person{
    private $studentID;

    public function __construct($nama, $studentID){
        parent:: __construct($nama); 
        $this->studentID = $studentID;
    }
    public function getNama(){
        return "Student: " . $this->nama;
    }
    public function getStudentID(){
        return $this->studentID;
    }
}

class Teacher extends person {
    private $teacherID;

    public function __construct($nama, $teacherID){
        parent:: __construct($nama); 
        $this->teacherID = $teacherID;
    }
    public function getNama(){
        return "Teacher: " . $this->nama;
    }
    public function getTeacherID(){
        return $this->teacherID;
    }
}
$student1 = new student("Rizki Khomsatun", "230102022");
$teacher1 = new Teacher("Rina Nur", "230102021");

echo $student1->getNama() . "<br>"; 
echo "Student ID: " . $student1->getStudentID() . "<br><br>";
echo $teacher1->getNama() . "<br>"; 
echo "Teacher ID: " . $teacher1->getTeacherID() . "<br>";
?>
```
![image](https://github.com/user-attachments/assets/cc064265-b731-4c83-a959-56ba0fa4af24)



### 4. Membuat Abstraction
Abstraction merupakan metode yang Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting. Dengan kata lain, abstraction memungkinkan kita untuk fokus pada “apa yang dilakukan” suatu objek, tanpa perlu tahu “bagaimana” cara kerjanya. Abstraction biasanya memiliki tujuan untuk mengurangi kompleksitas, meningkatkan keamanan data, serta memfasilitasi perubahan dan pemeliharaan kode. Abstraction dilakukan dengan mendefinisikan kelas atau antarmuka yang hanya menampilkan metode atau atribut yang relevan bagi pengguna akhir.
Detail implementasi disembunyikan di balik metode atau atribut ini, sehingga pengguna hanya perlu memahami apa yang objek lakukan, bukan bagaimana cara kerjanya.
```php
abstract class course{
    abstract public function getCourseDetails();
}
```
Code di atas merupakan Kelas abstrak yaitu kelas yang tidak dapat diinstansiasi secara langsung. Kelas ini sering digunakan sebagai dasar (base class) untuk kelas lain. Kelas abstrak bisa memiliki metode abstrak (metode yang dideklarasikan tanpa implementasi) dan metode konkret (metode yang memiliki implementasi).

Berikut Full Code beserta Outputnya
```php
<?php
abstract class course{
    abstract public function getCourseDetails();
}
 
class OnlineCourse extends Course{
    private $coursenama;
    private $platform;

    public function __construct($coursenama, $platform){
        $this->coursenama = $coursenama;
        $this->platform = $platform;
    }
    public function getCourseDetails(){
        return "Online Course: " . $this->coursenama . " - Platform: " . $this->platform;
    }
}

class OfflineCourse extends Course {
    private $coursenama;
    private $location;

    public function __construct($coursenama, $location) {
        $this->coursenama = $coursenama;
        $this->location = $location;
    }
    public function getCourseDetails() {
        return "Offline Course: " . $this->coursenama . " - Location: " . $this->location;
    }
}

$onlineCourse1 = new OnlineCourse("Praktikum Web2", "academia");
$offlineCourse1 = new OfflineCourse("Pemrograman", "PNC");

echo $onlineCourse1->getCourseDetails() . "<br>"; 
echo $offlineCourse1->getCourseDetails() . "<br>";
?>
```
![image](https://github.com/user-attachments/assets/45ee09e2-2d60-40d1-aacd-653b9045cf25)


### 5. Tugas
```php
<?php

//definisi kelas person
class Person {
    //protected properti yang ada di dalam kelas person
    protected $nama;

    //construct untuk menginisialisasi properti
    public function __construct($nama){
        $this->nama = $nama;
    }

    //metode untuk memperoleh niai dari nama
    public function getNama(){
        return $this->nama;
    }

    //metode untuk mendapatkan peran orang tersebut defalutnya adalah 'person'
    public function getRole(){
        return "person";
    }
}

//definisi kelas Dosen yang merupakan turunan dari kelas person
class Dosen extends Person{
    //private properti yang ada didalam kelas dosen
    private $nidn;

    //construct untuk menginisialisasi properti
    public function __construct($nama, $nidn){
        parent:: __construct($nama); //menginisialisasi properti $nama yang diwarisi oleh kelas person
        $this->nidn = $nidn;
    }

    //metode untuk memperoleh nilai Nidn
    public function getNidn(){
        return $this->nidn;
    }

    //metode menimpa getRole untuk mengembalikan "dosen" alih-alih "person"
    public function getRole(){
        return "dosen";
    }
}

//definisi kelas mahasiswa yang merupakan turunan dari kelas person
class Mahasiswa extends Person {
    //private properti yang dimiliki oleh kelas mahasiswa
    private $nim;

    //construct untuk menginisialisasi properti
    public function __construct($nama, $nim){
        parent:: __construct($nama); //menginisialisasi properti $nama yang diwarisi oleh kelas person
        $this->nim = $nim;
    }

    //metode untuk mendapatkan nilai dari Nim
    public function getNim(){
        return $this->nim;
    }

    //menimpa getRole untuk mengembalikan "mahasiswa" alih-alih "person".
    public function getRole(){
        return "mahasiswa";
    }
}

//definisi abstrak dari kelas jurnal
//kelas  abstrak tdk dpt diinstansi dan harus di warisi oleh kelas lain
abstract class Jurnal {
    protected $judul;

    //construct
    public function __construct($judul){
        $this->judul = $judul;
    }

    //implementasi metode abstrak 'pengajuanJurnal' dari kelas Jurnal
    abstract public function pengajuanJurnal(); //kelas lain harus memiliki metode abstrak yang harus di definisikan di kelas turunannya

}

//definisi kelas JurnalMahasiswa yang merupakan turunan dari abstrak kelas jurnal
class JurnalMahasiswa extends Jurnal{
    //construct 
    public function __construct($judul){
        parent:: __construct($judul);
    }
    //implementasi metode abstrak 'pengajuanJurnal' dari kelas jurnal
    public function pengajuanJurnal(){
        return "Mengajukan Jurnal dengan judul $this->judul ";
    }
}

class JurnalDosen extends Jurnal{
    //construct 
    public function __construct($judul){
        parent:: __construct($judul);
    }
    //implementasi metode abstrak 'pengajuanJurnal' dari kelas Jurnal
    public function pengajuanJurnal(){
        return "Mengajukan Jurnal dengan judul $this->judul";
    }
}

//membuat objek dari kelas dosen dan menampilkannya
$dosen1 = new Dosen ("Rizki Khomsatun Barokah", "230102022");
echo $dosen1->getNama() . " adalah seorang " . $dosen1->getRole() . "<br>";
echo "NIDN: " . $dosen1->getNidn() . "<br>";

//membuat objek JurnalDosen dan menampilkannya
$jurnalDosen1 = new JurnalDosen("Analisa Penggunaan bahan makanan");
echo $jurnalDosen1->pengajuanJurnal() . "<br><br>";

// Membuat objek Mahasiswa dan menampilkannya
$mahasiswa1 = new Mahasiswa("Rina Nur", "230102021");
echo $mahasiswa1->getNama() . " adalah seorang " . $mahasiswa1->getRole() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";

// Membuat objek JurnalMahasiswa dan menampilkannya
$jurnalMahasiswa1 = new JurnalMahasiswa("Analisa Produk Pengembangan Lingkungan");
echo $jurnalMahasiswa1->pengajuanJurnal() . "<br>";


?>
```
![image](https://github.com/user-attachments/assets/fa3d272c-5554-4cd0-ac58-10e9c9e98ab2)



Dalam tugas kali ini yaitu dengan langkah awal

1. mengimplementasikan kelas Person Sebagai induk dari Dosen Mahasiswa

di dalam codingan tersebut sudah di jelaskan Class person sebagai induk dan Class Dosen serta Mahasiswa adalah turunan dari person dengan menggunakan 'extends'

2. menggunakan konsep inheritance atau pewarisan yang membuat dosen dan mahasiswa memiliki atribut dan sesuai dengan perannya. 
```php
public function __construct($nama){
        $this->nama = $nama;
    }
```
Code di atas adalah fungsi atau metode yang akan diwariskan oleh kelas induk kepada turunnya. berikut adalah pengaplikasiannya pada kelas turunannya
```php
class Dosen extends Person{
    private $nidn;

    public function __construct($nama, $nidn){
        parent:: __construct($nama);
        $this->nidn = $nidn;
    }
```
dalam kelas turunannya mereka masih bisa memiliki atribut dan perannya yang sesuai serta masih mewarisi metode dari induknya. 

3. Menerapkan polymorpshism dengan metode getRole() di kelas person dan override di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda. 

dalam kelas Person kita harus membuat metode getRole() terlebih dahulu supaya bisa digunakan pada kelas Dosen dan Mahasiswa
```php
public function getRole(){
        return "person";
    }
```

dan pada kelass Dosen serta Mahasiswa dapat menggunakannya dengan hasil yang beda
```php
public function getRole(){
        return "dosen";
    }
```

4. Menggunakan Encapsulation untuk melindungi atribut nidn di kelas dosen dan nim di kelas mahasiswa. 
pada kelas dosen dan mahasiswa kita bisa menggunakan visibilitas private
```php
class Dosen extends Person {
private $nidn;
}

class Mahasiswa extends Person{
private $nim;
}
```

5. Membuat class abstrak jurnal dan implementasinya dengan membuat turunan JurnalDosen dan JurnalMahasiswa.
```php
abstract class Jurnal {
    protected $judul;

    public function __construct($judul){
        $this->judul = $judul;
    }
    abstract public function pengajuanJurnal(); 
}

class JurnalMahasiswa extends Jurnal{
    public function __construct($judul){
        parent:: __construct($judul);
    }
    public function pengajuanJurnal(){
        return "Mengajukan Jurnal dengan judul $this->judul ";
    }
}

class JurnalDosen extends Jurnal{
    //construct 
    public function __construct($judul){
        parent:: __construct($judul);
    }
    public function pengajuanJurnal(){
        return "Mengajukan Jurnal dengan judul $this->judul";
    }
}
```

