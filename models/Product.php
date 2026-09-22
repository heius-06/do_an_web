<?php
// Bật tính năng ghi nhớ người dùng (Session) cho Giỏ hàng
session_start();

require_once 'config/database.php';
require_once 'models/Product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

// --- TÍNH NĂNG NÂNG CAO: XỬ LÝ THÊM VÀO GIỎ HÀNG ---
if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    // Tăng số lượng nếu sản phẩm đã có trong giỏ
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]++;
    } else {
        $_SESSION['cart'][$id] = 1;
    }
    // Tải lại trang và báo thành công để giỏ hàng cập nhật số
    header('Location: index.php?added=true');
    exit;
}

// Tính tổng số sản phẩm trong giỏ hàng để hiển thị lên Header
$cart_count = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $qty) {
        $cart_count += $qty;
    }
}

// Xử lý Lọc và Tìm kiếm
$search_keyword = isset($_GET['search']) ? trim($_GET['search']) : "";
$brand_filter = isset($_GET['brand']) ? trim($_GET['brand']) : "";

$phones = $product->getFiltered($search_keyword, $brand_filter);

// Gọi giao diện
require_once 'views/home.php';
?>
