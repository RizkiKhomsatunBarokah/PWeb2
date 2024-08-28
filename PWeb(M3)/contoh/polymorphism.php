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

//definisi kelas printer
class printer {

    //metode untuk mencetak nama hewan dan suara yang dihasilkan
    public function print(Animal $animal){
        echo $animal->getNama() . " says " . $animal->makeSound() . "<br>";
    }
}

//membuat objek dog
$dog = new Dog ("Buddy");

//membuat objek cat
$cat = new Cat ("Kitty");

//membuat objek printer
$printer1 = new printer();

//mencetak informasi cat dan dog
$printer1->print($dog);
$printer1->print($cat);
?>