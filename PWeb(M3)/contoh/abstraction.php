<?php
//definisi kelas abstrak shape
abstract class Shape {
    //metode abstrak yang mengembalikan luas bentuk, harus diimplementasikan oleh kelas turunannya
    abstract public function area();
}

//definisi kelas rectangle yang merupakan turunan dari kelas shape
class Rectangle extends Shape {
    //properti private yang ada didalam kelas rectangle
    private $width;
    private $height;

    //construct 
    public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
    }
    //implementasi metode area 
    public function area() {
        return $this->width * $this->height;
    }
}

//definisi kelas circle yang merupakan turunan dari kelas shape
class Circle extends Shape {
    //properti private yang ada di dalam kelas circle
    private $radius;

    //metode construct
    public function __construct($radius) {
        $this->radius = $radius;
    }
    //implementasi metode area
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

//membuat objek rectangle dan menampilkannya
$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: " . $rectangle->area();

//membuat objek circle dan menampilkannya
$circle = new Circle(7);
echo "Area of Circle: " . $circle->area(); 
?>