<?php

class Produk {
    public $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "One Piece";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Dota 2";
// $produk2->tambahProperty = "Ini Property baru";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eiichiro Oda";
$produk3->penerbit = "Jump Comics";
$produk3->harga = 20000;

$produk4 = new Produk();
$produk4->judul = "GTA 5";
$produk4->penulis = "Leslie Benzies";
$produk4->penerbit = "Rockstar Games";
$produk4->harga = 300000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
