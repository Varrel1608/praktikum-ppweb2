<?php
class ConnectDB
{
    public function __construct()
    {
     $this->conn = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "bukutamu");
     if (!$this->conn) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
   
    }
    public function db() {
        return $this->conn;
    }
}
$db = new ConnectDB();
$conn = $db->db();

?>