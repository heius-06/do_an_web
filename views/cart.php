<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng - HKT Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style> body { background-color: #f1f1f1; } .tgdd-header { background-color: #ffd400; padding: 15px 0; } </style>
</head>
<body>
    <header class="tgdd-header"><div class="container"><a href="index.php" class="text-dark text-decoration-none"><h2 class="fw-bold m-0"><i class="bi bi-arrow-left"></i> Quay lại mua sắm</h2></a></div></header>
    <div class="container my-5 bg-white p-4 rounded shadow-sm" style="max-width: 800px;">
        <h3 class="mb-4 text-center fw-bold">Giỏ hàng của bạn</h3>
        <?php if(empty($_SESSION['cart'])): ?>
            <div class="text-center"><i class="bi bi-cart-x display-1 text-muted"></i><p class="mt-3">Giỏ hàng trống.</p></div>
        <?php else: ?>
            <div class="alert alert-success">Có <b><?= $cart_count ?></b> sản phẩm trong giỏ hàng. Tính năng thanh toán sẽ sớm được cập nhật!</div>
            <a href="#" class="btn btn-danger w-100 fw-bold p-3">ĐẶT HÀNG NGAY</a>
        <?php endif; ?>
    </div>
</body>
</html>
