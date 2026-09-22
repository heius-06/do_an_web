<?php
class Product {
    private $conn;
    private $table_name = "products";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Lấy dữ liệu động dựa trên bộ lọc
    public function getFiltered($keyword = "", $brand = "") {
        $query = "SELECT * FROM " . $this->table_name . " WHERE 1=1";
        
        if (!empty($keyword)) {
            $query .= " AND name LIKE :keyword";
        }
        if (!empty($brand)) {
            $query .= " AND brand = :brand";
        }
        
        $query .= " ORDER BY id ASC";
        
        $stmt = $this->conn->prepare($query);
        
        if (!empty($keyword)) {
            $keyword_param = "%{$keyword}%";
            $stmt->bindParam(":keyword", $keyword_param);
        }
        if (!empty($brand)) {
            $stmt->bindParam(":brand", $brand);
        }
        
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>