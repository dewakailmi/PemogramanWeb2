<?php
class fruit {
    // membuat Property
    public $name;
    public $color;
    public $lavor;


    // MEMBUAT method
    public function getName(){
        return $this->name;
    }
    public function getInfo(){
        return "Nama buah = " . $this->name . "<br>Warna buah = " . $this->color  . "<br>Rasanya = " . $this->flavor; 
    }
}

// membuat Objek / Instance
$fruit1 = new Fruit();
$fruit1->name = "Apple";
$fruit1->color = "Merah";
$fruit1->flavor = "Manis";


echo "Nama buah = " . $fruit1->getName(); 
echo "<br>";
echo $fruit1->getInfo();

$fruit1 = new Fruit();
$fruit1->name = "Pisang";
$fruit1->color = "Kuning";
$fruit1->flavor = "Manis";


echo "<hr>";
echo $fruit1->getInfo();

$fruit1 = new Fruit();
$fruit1->name = "Semangka";
$fruit1->color = "Hijau";
$fruit1->flavor = "Manis";


echo "<hr>";
echo $fruit1->getInfo();