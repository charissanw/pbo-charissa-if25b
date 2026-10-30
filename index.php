<?php

require('./PropertyConstan.php');

use Pbo\Marketplace\Produk;

$produk = new Produk('P001', 'Laptop', 10000000, 5);

$produk->cetakInfo();

?>