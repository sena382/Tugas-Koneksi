<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: "Times New Roman", Arial;}
        table {border-collapse: collapse;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030;}
        th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0;}
    </style>
</head>
<body>
    <center><h1>Apoteker</h1></center>
    
    <h3>Tabel Dokter</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Dokter</th>
                <th>Nama</th>
                <th>Spesialisasi</th>
                <th>Nomor_Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = 'SELECT * FROM dokter';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Dokter'] ?></td>
                    <td><?php echo $row['Nama'] ?></td>
                    <td><?php echo $row['Spesialisasi'] ?></td>
                    <td><?php echo $row['Nomor_Telepon'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Kunjungan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Kunjungan</th>
                <th>ID Pasien</th>
                <th>ID Dokter</th>
                <th>Tanggal Kunjungan</th>
                <th>Diagnosa</th>
                <th>Resep</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM kunjungan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Kunjungan'] ?></td>
                    <td><?php echo $row['ID_Pasien'] ?></td>
                    <td><?php echo $row['ID_Dokter'] ?></td>
                    <td><?php echo $row['Tanggal_Kunjungan'] ?></td>
                    <td><?php echo $row['Diagnosa'] ?></td>
                    <td><?php echo $row['Resep'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pasien</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Nama Asuransi</th>
                <th>Nomor Polis</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pasien';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Pasien'] ?></td>
                    <td><?php echo $row['Nama'] ?></td>
                    <td><?php echo $row['Alamat'] ?></td>
                    <td><?php echo $row['Tanggal_Lahir'] ?></td>
                    <td><?php echo $row['Nomor_Telepon'] ?></td>
                    <td><?php echo $row['Nama_Asuransi'] ?></td>
                    <td><?php echo $row['Nomor_Polis'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Obat</h3>
    <table>
        <thead>
            <tr>
                <th>ID Obat</th>
                <th>Nama Obat</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM obat';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Obat'] ?></td>
                    <td><?php echo $row['Nama_Obat'] ?></td>
                    <td><?php echo $row['Harga'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Resep Obat</h3>
    <table>
        <thead>
            <tr>
                <th>ID Resep</th>
                <th>ID Obat</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM resep_obat';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Resep'] ?></td>
                    <td><?php echo $row['ID_Obat'] ?></td>
                    <td><?php echo $row['Jumlah'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
