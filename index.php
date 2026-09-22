<?php
require_once 'config/database.php';
require_once 'models/Product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

// Nhận tham số từ URL
$search_keyword = isset($_GET['search']) ? $_GET['search'] : "";
$brand_filter = isset($_GET['brand']) ? $_GET['brand'] : "";

// Lấy 20 sản phẩm (có lọc nếu có thao tác)
$phones = $product->getFiltered($search_keyword, $brand_filter);

require_once 'views/home.php';
?>