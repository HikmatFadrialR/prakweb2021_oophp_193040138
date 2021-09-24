<?php

// define('NAMA', 'Hikmat Fadrial Ramadhan');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//    const NAMA = 'Hikmat Fadrial R';
// }

// echo Coba::NAMA;

// echo __FILE__;

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>