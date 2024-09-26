<?php
class BiodataRepository {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function findAll() {
        $query = "SELECT * FROM biodata"; // Adjust the table name if needed
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save($biodataDto) {
        $query = "INSERT INTO biodata (nama, usia, alamat, jenis_kelamin, pekerjaan, pendidikan, no_telepon, email, status_pernikahan) VALUES (:nama, :usia, :alamat, :jenis_kelamin, :pekerjaan, :pendidikan, :no_telepon, :email, :status_pernikahan)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $biodataDto->getNama());
        $stmt->bindParam(':usia', $biodataDto->getUsia());
        $stmt->bindParam(':alamat', $biodataDto->getAlamat());
        $stmt->bindParam(':jenis_kelamin', $biodataDto->getJenisKelamin());
        $stmt->bindParam(':pekerjaan', $biodataDto->getPekerjaan());
        $stmt->bindParam(':pendidikan', $biodataDto->getPendidikan());
        $stmt->bindParam(':no_telepon', $biodataDto->getNoTelepon());
        $stmt->bindParam(':email', $biodataDto->getEmail());
        $stmt->bindParam(':status_pernikahan', $biodataDto->getStatusPernikahan());
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM biodata WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
