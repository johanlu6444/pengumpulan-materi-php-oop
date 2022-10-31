<?php
trait apakabar{
    public function apakabar(){
        echo static::class. 'apakabar';
    }
}

trait selamatpagi {
    public function apakabar(){
        echo static::class . 'selamatpagi';
    }
}

class pesan{
    use apakabar, selamatpagi{
        apakabar::apakabar insteadof selamatpagi;
        selamatpagi::apakabar as apakabardaritraitselamatpagi;
    }
}
// inisialisasi class objek
$pesan = new pesan();
echo $pesan ->apakabardaritraitselamatpagi();