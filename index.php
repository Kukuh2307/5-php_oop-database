<?php
include 'database.php';
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP CRUD DATA MAHASISWA</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>CRUD OOP PHP</h1>
    <h3>Data Mahasiswa</h3>

    <a href="input.php" class="input">hInput Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Whatsapp</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($db->tampil_data() as $x) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $x['nama']; ?></td>
                <td><?php echo $x['email']; ?></td>
                <td><?php echo $x['whatsapp']; ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit" class="edit">Edit</a>
                    <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="hapus">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>