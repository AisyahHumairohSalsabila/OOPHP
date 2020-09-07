<?php
class Buku {
	public 	$judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

}

class CetakInfoProduk{
	public function Cetak($buku){
		$str = "{$buku->judul} | {$buku->getLabel()} (Rp.{$buku->harga})";
		return $str;
	}
}
$buku1 = new buku("Be The New You","Wirda Mansur","Kata Depan", 45000);
$buku2 = new buku("Unlimited You","Wirda Mansur","Kata Depan",50000);
$infobuku = new CetakInfoProduk();

echo "Buku : " . $buku1->getLabel();
echo "<br>";
echo $infobuku->Cetak($buku1);
echo "<br>";
echo $infobuku->Cetak($buku2);