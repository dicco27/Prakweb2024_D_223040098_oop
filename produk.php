<?php

// Jualan Produk
// Komik
// Game

 class Produk {
   public $judul = "judul",
          $penulis = "penulis", 
          $penerbit = "penerbit", 
          $harga = 0;

          public function_

          public function getLabel() {
            return "$this->penulis, $this->penerbit"; 
          }


}

$produk1 = new Produk ();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk ();
var_dump($produk2->judul);

//$produk2 = new Produk ();
//$produk2->judul = new Produk ();
//$produk2->penulis = new Produk ();
//$produk2->penerbit = new Produk ();
//$produk2->harga = 30000;
//var_dump($produk3);

$produk3 = new Produk ();
$produk3->judul = "Naruto" ;
$produk3->penulis = "Masashi Kishimoto" ;
$produk3->penerbit = "Shonen Jump" ;
$produk3->harga = 30000;


$produk4 = new Produk ();
$produk4->judul = "Uncharted" ;
$produk4->penulis = "Neil Duckman" ;
$produk4->penerbit = "Sony Computer" ;
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();  