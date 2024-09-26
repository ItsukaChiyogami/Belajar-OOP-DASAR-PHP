<?php

// jual produk
// jual anime
// jual figure

class Produk { // <= class
    public function __construct( // <= constructor 
        private string $nama = '', // <= property
        private int $harga = 0, // <= property
        private int $jumlah = 0, // <= property
        private string $penerbit = '', // <= property
        private string $tipe = '', // <= property
    ) {}
    public function tambahProduk(int $jumlah) { //
    } // <= methods

    public function kurangProduk(int $jumlah) {

    } // <= methods

    public function jumlahProduk() {
        return $this->jumlah; // <= isi methods atau ini property?
    } // <= methods

    public function infoProduk() {
        return "Nama: $this->nama, Harga: $this->harga, Jumlah: $this->jumlah, Penerbit: $this->penerbit, Tipe: $this->tipe\n";
    } // <= methods
}

// Membuat instance dari class Produk

// Menampilkan informasi produk
$produk1 = new Produk("brunhild figure tobiichi origami", 10000, 5, "AIC Plus+","Figure Anime"); // <= object
$produk2 = new Produk("Devil Mode figure tobiichi origami", 35000, 2, "AIC Plus+","Figure Anime"); // <= object
$infoProduk = $produk1->infoProduk(); // Memanggil infoProduk dan menyimpan hasilnya
$infoProduk2 = $produk2->infoProduk(); // Memanggil infoProduk untuk produk2
// Menggunakan var_dump untuk melihat detail object
var_dump($infoProduk);
var_dump($infoProduk2);
var_dump($produk1);
var_dump($produk2);

