<?php
class Produk{
	public $judul,
	 	   $penulis,
	 	   $penerbit,
	 	   $harga;
	 public function getCetak(){
	 	return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
	 
	 }
	 public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
	 	$this->judul = $judul;
	 	$this->penulis = $penulis;
	 	$this->penerbit = $penerbit;
	 	$this->harga = $harga;
	 }
}

$produk1 = new Produk("Uncharted","Neil Druckmann","Sony Computer",250000);
$produk2 = new Produk("Naruto","Masashi Kishimoto","Shonen Jumm",30000);

echo "Game : " . $produk1 -> getCetak();
echo "<br>";
echo "Komik : " . $produk2 -> getCetak();