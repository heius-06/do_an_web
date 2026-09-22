<?php
class Product {
    private $conn;
    private $table_name = "products";
    public function __construct($db) { $this->conn = $db; }

    public function getFiltered($keyword = "", $brand = "") {
        $query = "SELECT * FROM " . $this->table_name . " WHERE 1=1";
        if (!empty($keyword)) $query .= " AND name LIKE :keyword";
        if (!empty($brand)) $query .= " AND brand = :brand";
        $stmt = $this->conn->prepare($query);
        if (!empty($keyword)) { $kw = "%{$keyword}%"; $stmt->bindParam(":keyword", $kw); }
        if (!empty($brand)) $stmt->bindParam(":brand", $brand);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
