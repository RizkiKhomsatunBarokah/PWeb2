<?php
//definisi kelas animal
class Animal{
    //properti protected yang ada di dalam kelas animal
    protected $nama;

    //construct
    public function __construct($nama){
        $this->nama = $nama;
    }

    //metode untuk mendapatkan nilai nama 
    public function getNama(){
        return $this->nama;
    }
}

//definisi kelas dog dari turunan kelas animal
class Dog extends Animal {
    //metode untuk menghasilkan suara anjing
    public function makeSound(){
        return "woof!";
    }
}

//definisi kelas dari turunan kelas animal
class Cat extends Animal {
    //metode untuk menghasilkan suara kucing
    public function makeSound(){
        return "meoww!";
    }
}

//membuat objek dog
$dog = new Dog ("Buddy");

//mencetak nama anjing san suara yang dihasilkan
echo $dog->getNama() . " says " . $dog->makeSound();
?>