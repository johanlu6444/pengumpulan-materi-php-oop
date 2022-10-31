<?php 

class mencarinilaiganjilgenap 
{
  public function mencarinilaiganjilgenap($inputnilai){

    if($inputnilai %=2){
        echo"sisa bagi [{}]adalah ganjil";    
    }else{
        echo"sisa bagi [{}]adalah genap";
    }
  }
}

// inisialisasi class objek
$obj = new mencarinilaiganjilgenap();
