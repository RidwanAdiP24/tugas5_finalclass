<?php
class bola{
    public $jariJari;
    public $pi = 3.14;

    public function __construct($jariJari){
        $this->jariJari = $jariJari;
    }
}

final class Voli extends bola {
    public function hitung_bola(){
        $x = 4*$this->jariJari * $this->jariJari * $this->pi;
      return "Luas Permukaan Bola Voli adalah $x cm ";
    }
    
final public function __destruct(){
        echo "<br> Menghitung Luas Permukaan Bola Voli dengan jari-jari 14 cm <br>";
        }
 }

 $bola_Voli = new Voli(14);

 echo $bola_Voli->hitung_bola();
?>