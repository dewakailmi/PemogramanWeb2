<?php

class Balok {
    //Membuat Property
    public $panjang;
    public $lebar;
    public $tinggi;

    //Membuat Method
    public function __construct($p, $l, $t){
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
    //luas
    public function luas(){
        return 2 * ( $this->panjang * $this->lebar ) + ( $this->panjang * $this->tinggi ) + ( $this->lebar * $this->tinggi );
    }
    //keliling
    public function keliling(){
        return 4 * ($this->panjang + $this->lebar + $this->tinggi);
    }
    //volume
    public function volume(){
        return  $this->panjang * $this->lebar * $this->lebar;
    }


}

//membuat objek / Instance
$balok1 = new balok(5, 10, 25);
echo "luas Balok 1 =" . $balok1->luas();
echo "<br>";
echo "keliling Balok 1=" . $balok1->keliling();
echo "<br>";
echo "volume Balok 1=" . $balok1->volume();

$balok1 = new balok(15, 20, 25);
echo "luas Balok 1 =" . $balok1->luas();
echo "<hr>";
echo "keliling Balok 1=" . $balok1->keliling();
echo "<hr>";
echo "volume Balok 1=" . $balok1->volume();