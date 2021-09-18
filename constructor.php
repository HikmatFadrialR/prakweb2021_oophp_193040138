<?php

class Produk {
    public $judul, 
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("one Piece", "Eiichiro Oda", "Jump Comics", 20000);
$produk2 = new Produk("GTA 5", "Leslie Benzies", "Rockstar Games", 300000);
$produk3 = new Produk("Hunter x Hunter");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
