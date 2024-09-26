<?php
require_once '../repository/BiodataRepository.php';
require_once '../models/Biodata.php';
require_once '../dto/BiodataDTO.php';

class BiodataService {
    private $biodataRepository;

    public function __construct($biodataRepository) {
        $this->biodataRepository = $biodataRepository;
    }

    public function getAllBiodata() {
        return $this->biodataRepository->findAll();
    }

    public function addBiodata($nama, $usia, $alamat, $jenis_kelamin, $pekerjaan, $pendidikan, $no_telepon, $email, $status_pernikahan) {
        $biodataDto = new BiodataDTO($nama, $usia, $alamat, $jenis_kelamin, $pekerjaan, $pendidikan, $no_telepon, $email, $status_pernikahan);
        return $this->biodataRepository->save($biodataDto);
    }

    public function deleteBiodata($id) {
        return $this->biodataRepository->delete($id);
    }
}
?>
