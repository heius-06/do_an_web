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
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Ép buộc sử dụng UTF-8 để không bị lỗi font Tiếng Việt
            $this->conn->exec("SET NAMES 'utf8mb4'");
        } catch(PDOException $exception) {
            echo "Lỗi kết nối CSDL: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
