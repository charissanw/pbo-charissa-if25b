<?php

class Produk {

        //property
        public string $kode;
        public string $nama;
        public int $harga;
        public int $stok;
        
        //constant
        public const PAJAK = 0.11;

}

//object
$produk = new Produk();

//input ke property
$produk->kode ='P0001';
$produk->nama ='Laptop';
$produk->harga =10000000;
$produk->stok =5;

//hitung harga 
$pajak = produk::PAJAK * 100;
$jumlahPajak = $produk->harga*produk::PAJAK;

//total
$total = $produk->harga * $jumlahPajak;

//hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: ".$produk->harga;
echo "<br/>";

echo "Stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ".$pajak."%";
echo "<br/>";

echo " Total harga setelah pajak: Rp. ".$total;