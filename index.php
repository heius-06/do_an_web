<?php
session_start();
require_once 'config/database.php';
require_once 'models/Product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

// Logic Thêm vào giỏ hàng
if ($action == 'add_cart' || $action == 'buy_now') {
    $id = (int)$_GET['id'];
    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
    $_SESSION['cart'][$id] = isset($_SESSION['cart'][$id]) ? $_SESSION['cart'][$id] + 1 : 1;
    
    if ($action == 'buy_now') {
        header('Location: index.php?action=cart'); // Chuyển thẳng tới giỏ hàng
    } else {
        header('Location: index.php?added=true'); // Ở lại trang chủ và báo Toast
    }
    exit;
}

// Tính tổng số lượng hiển thị trên icon
$cart_count = isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0;

// Routing trang
if ($action == 'cart') {
    require_once 'views/cart.php';
} else {
    $search_keyword = isset($_GET['search']) ? trim($_GET['search']) : "";
    $brand_filter = isset($_GET['brand']) ? trim($_GET['brand']) : "";
    $phones = $product->getFiltered($search_keyword, $brand_filter);
    require_once 'views/home.php';
}
?>
