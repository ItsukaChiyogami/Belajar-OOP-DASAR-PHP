<?php

// jual produk
// jual anime
// jual figure

class Produk {
    public function __construct(
        private string $nama,
        private int $harga,
        private int $jumlah,
        private string $penerbit,
        private string $tipe,
    ) {}
    public function tambahProduk(int $jumlah) {
    }

    public function kurangProduk(int $jumlah) {

    }

    public function jumlahProduk() {
        return $this->jumlah;
    }

    public function infoProduk() {
        return "Nama: $this->nama, Harga: $this->harga, Jumlah: $this->jumlah, Penerbit: $this->penerbit, Tipe: $this->tipe\n";
    }
}

// Membuat instance dari class Produk

// Menampilkan informasi produk
$produk1 = new Produk("brunhild figure tobiichi origami", 10000, 5, "AIC Plus+","Figure Anime");
$produk2 = new Produk("Devil Mode figure tobiichi origami", 35000, 2, "AIC Plus+","Figure Anime");
$infoProduk = $produk1->infoProduk(); // Memanggil infoProduk dan menyimpan hasilnya
$infoProduk2 = $produk2->infoProduk(); // Memanggil infoProduk untuk produk2
// Menggunakan var_dump untuk melihat detail object
var_dump($infoProduk);
var_dump($infoProduk2);
var_dump($produk1);
var_dump($produk2);

