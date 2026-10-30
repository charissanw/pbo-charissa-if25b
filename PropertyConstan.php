<?php

namespace Pbo\Marketplace;

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function __construct(string $kodeInput, string $namaInput, int $hargaInput, int $stokInput) {
        $this->kode = $kodeInput;
        $this->nama = $namaInput;
        $this->harga = $hargaInput;
        $this->stok = $stokInput;
    }

    public function cetakInfo() {
        $pajak = self::PAJAK * 100;
        $jumlahpajak = $this->harga * self::PAJAK;
        $total = $this->harga + $jumlahpajak;

        echo "produk: " . $this->nama . "<br>";
        echo "kode: " . $this->kode . "<br>";
        echo "harga: " . $this->harga . "<br>";
        echo "stok: " . $this->stok . "<br>";
        echo "pajak: " . $pajak . "%" . "<br>";
        echo "total harga setelah pajak: Rp." . $total . "<br>";
    }
}

?>