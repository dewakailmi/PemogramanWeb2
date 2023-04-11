<?php

class Lingkaran {
    public $jari_jari;
    public const PHI = 3.14;

    public function __construct($r){
        $this->jari_jari = $r; 
    }

    public function luas(){
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling(){
        return 2*self::PHI * $this->jari_jari;
    }
    

}

$lingkaran1 = new lingkaran(10);
echo "Luas lingkaran1 = " . $lingkaran1->luas();

echo "<br>";
echo "Keliling = " . $lingkaran1->keliling();