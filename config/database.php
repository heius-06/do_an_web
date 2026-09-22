<?php
class Database {
    private $host = 'mysql';
    private $db_name = 'hkt_shop';
    private $username = 'root';
    private $password = 'phamminhbien123';
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci");
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4", $this->username, $this->password, $options);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Lỗi: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
