<?php
class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'db_msib_php_oop1';
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password);

        // Periksa apakah koneksi berhasil
        if (!$this->conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
        mysqli_select_db($this->conn, $this->db);
    }


    function tampil_data()
    {
        $data = mysqli_query($this->conn, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input($nama, $email, $whatsapp, $alamat)
    {
        mysqli_query($this->conn, "INSERT INTO mahasiswa (nama,email,whatsapp,alamat) VALUE('$nama','$email','$whatsapp','$alamat')");
    }

    function hapus($id)
    {
        mysqli_query($this->conn, "DELETE FROM mahasiswa WHERE id='$id'");
    }

    function edit($id)
    {
        $data = mysqli_query($this->conn, "SELECT * FROM mahasiswa WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id, $nama, $email, $whatsapp, $alamat)
    {
        mysqli_query($this->conn, "UPDATE mahasiswa SET nama='$nama',email='$email',whatsapp='$whatsapp',alamat='$alamat' WHERE id='$id'");
    }
}
