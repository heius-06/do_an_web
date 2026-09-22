<?php
session_start();
require_once 'config/database.php';
require_once 'models/Product.php';

$db = (new Database())->getConnection();
$product = new Product($db);
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

if ($action == 'add_cart' || $action == 'buy_now') {
    $id = (int)$_GET['id'];
    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
    $_SESSION['cart'][$id] = isset($_SESSION['cart'][$id]) ? $_SESSION['cart'][$id] + 1 : 1;
    if ($action == 'buy_now') header('Location: index.php?action=cart');
    else header('Location: index.php?added=true');
    exit;
}

if ($action == 'remove_cart') {
    $id = (int)$_GET['id'];
    unset($_SESSION['cart'][$id]);
    header('Location: index.php?action=cart');
    exit;
}

if ($action == 'process_checkout') {
    $_SESSION['cart'] = []; // Xóa giỏ hàng sau khi đặt thành công
    header('Location: index.php?action=success');
    exit;
}

$cart_count = isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0;

if ($action == 'cart') {
    $cart_items = []; $total_price = 0;
    if(!empty($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $id => $qty) {
            $item = $product->getById($id);
            if($item) {
                $item['qty'] = $qty;
                $item['subtotal'] = $item['price'] * $qty;
                $total_price += $item['subtotal'];
                $cart_items[] = $item;
            }
        }
    }
    require_once 'views/cart.php';
} elseif ($action == 'checkout') {
    require_once 'views/checkout.php';
} elseif ($action == 'success') {
    require_once 'views/success.php';
} else {
    $search_keyword = isset($_GET['search']) ? trim($_GET['search']) : "";
    $brand_filter = isset($_GET['brand']) ? trim($_GET['brand']) : "";
    $phones = $product->getFiltered($search_keyword, $brand_filter);
    require_once 'views/home.php';
}
?>
