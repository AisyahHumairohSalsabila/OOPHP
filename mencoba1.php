<? php
class produk {
    public  $namaBarang = "Sepatu",
            $merk = "Puma",
            $harga = "650000";

    public function getCetak(){
        return "$this->namaBarang, $this->merk, $this->harga";
    }
}
$produk1 = produk baru ();
$produk1->namaBarang = "Tas";
var_dump($produk1); 

$produk2 = produk baru ();
$produk2 ->namaBarang = "Headset";
$produk2 ->propertyBaru = "Biru";
echo "Nama Barang:" , $produk2 -> getcetak ();

echo "<br";

$produk3 =produk baru ();
$produk3->namaBarang = "Tas";
$produk3->merk = "Export";
$produk3->harga = 250000;
echo "Nama Barang:", $produk3->getCetak ();