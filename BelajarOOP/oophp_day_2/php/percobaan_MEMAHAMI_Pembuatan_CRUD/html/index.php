<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Management</title>
</head>
<body>
    <h1>Biodata Management System</h1>

    <!-- Form for adding new biodata -->
    <form action="../controller/BiodataController.php" method="POST">
        <input type="text" name="nama" placeholder="Nama" required><br>
        <input type="number" name="usia" placeholder="Usia" required><br>
        <input type="text" name="alamat" placeholder="Alamat" required><br>
        <select name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <input type="text" name="pekerjaan" placeholder="Pekerjaan" required><br>
        <input type="text" name="pendidikan" placeholder="Pendidikan" required><br>
        <input type="text" name="no_telepon" placeholder="No Telepon" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <select name="status_pernikahan" required>
            <option value="">Pilih Status Pernikahan</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
            <option value="Janda">Janda</option>
            <option value="Duda">Duda</option>
        </select><br>
        <input type="submit" name="create" value="Tambah Biodata">
    </form>

    <h2>List of Biodata</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Pekerjaan</th>
            <th>Pendidikan</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Status Pernikahan</th>
            <th>Aksi</th>
        </tr>
        <?php
        require_once '../controller/BiodataController.php'; // Include the controller to fetch the biodata
        foreach ($biodataList as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item['id']) ?></td>
            <td><?= htmlspecialchars($item['nama']) ?></td>
            <td><?= htmlspecialchars($item['usia']) ?></td>
            <td><?= htmlspecialchars($item['alamat']) ?></td>
            <td><?= htmlspecialchars($item['jenis_kelamin']) ?></td>
            <td><?= htmlspecialchars($item['pekerjaan']) ?></td>
            <td><?= htmlspecialchars($item['pendidikan']) ?></td>
            <td><?= htmlspecialchars($item['no_telepon']) ?></td>
            <td><?= htmlspecialchars($item['email']) ?></td>
            <td><?= htmlspecialchars($item['status_pernikahan']) ?></td>
            <td>
                <a href="../controller/BiodataController.php?delete=<?= $item['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
