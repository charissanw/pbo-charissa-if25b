<?php

class Produk {

        //property
        public string $kode;
        public string $nama;
        public int $harga;
        public int $stok;
        
        //constant
        public const PAJAK = 0.11;

        public function __construct($kode,$nama,$harga,$stok) {
                $this->kode = $kode;
                $this->nama = $nama;
                $this->harga = $harga;
                $this->stok = $stok;
        }

        public function pajak() {
                return self::PAJAK * 100;
        }

        public function total() {
                return $this->harga + ($this->harga * self::PAJAK);
        }
}

//object
$produk = new Produk('P0001','Laptop',10000000,5);

//hitung harga 
//$pajak = produk::PAJAK * 100;
//$jumlahPajak = $produk->harga*produk::PAJAK;

//total
//$total = $produk->harga * $jumlahPajak;

//hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: ".$produk->harga;
echo "<br/>";

echo "Stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ".$produk->pajak()."%";
echo "<br/>";

echo " Total harga setelah pajak: Rp. ".$produk->total();