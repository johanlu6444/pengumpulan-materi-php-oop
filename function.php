<?php 

class membuatfunction {

    public function sayhello(){
        echo 'inidariclass' . __CLASS__;
    }

    public function perkalian($number){
        echo 'angka yang dimasukkan adalah'. $number;
    }

    public function penjumlahan($numb_a, $numb_b){
        return $numb_a * $numb_b;
    }

    public function gettitle(){
        return $this-> title;
    }
}

$obj = new membuatfunction();
echo $obj -> sayhello();