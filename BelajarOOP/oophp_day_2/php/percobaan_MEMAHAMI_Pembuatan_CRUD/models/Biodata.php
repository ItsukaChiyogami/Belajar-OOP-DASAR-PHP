<?php
class Biodata {
    private $id;
    private $nama;
    private $usia;
    private $alamat;
    private $jenis_kelamin;
    private $pekerjaan;
    private $pendidikan;
    private $no_telepon;
    private $email;
    private $status_pernikahan;

    public function __construct($id, $nama, $usia, $alamat, $jenis_kelamin, $pekerjaan, $pendidikan, $no_telepon, $email, $status_pernikahan) {
        $this->id = $id;
        $this->nama = $nama;
        $this->usia = $usia;
        $this->alamat = $alamat;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->pekerjaan = $pekerjaan;
        $this->pendidikan = $pendidikan;
        $this->no_telepon = $no_telepon;
        $this->email = $email;
        $this->status_pernikahan = $status_pernikahan;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getNama() { return $this->nama; }
    public function getUsia() { return $this->usia; }
    public function getAlamat() { return $this->alamat; }
    public function getJenisKelamin() { return $this->jenis_kelamin; }
    public function getPekerjaan() { return $this->pekerjaan; }
    public function getPendidikan() { return $this->pendidikan; }
    public function getNoTelepon() { return $this->no_telepon; }
    public function getEmail() { return $this->email; }
    public function getStatusPernikahan() { return $this->status_pernikahan; }
}
?>
