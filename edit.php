<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <?php
    include 'database.php';
    $db = new database();
    ?>
    <h3>Edit Data Mahasiswa</h3>
    <form action="proses.php?aksi=update" method="post">
        <?php
        foreach ($db->edit($_GET['id']) as $d) {
        ?>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $d['email'] ?>"></td>
                </tr>
                <tr>
                    <td>Whatsapp</td>
                    <td><input type="text" name="whatsapp" value="<?php echo $d['whatsapp'] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        <?php } ?>
    </form>
</body>

</html>