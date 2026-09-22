<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"><title>Giỏ hàng - HKT Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>body{background:#f1f1f1;} .tgdd-header{background:#ffd400; padding:15px 0;} .img-cart{width:60px;height:60px;object-fit:contain;}</style>
</head>
<body>
    <header class="tgdd-header"><div class="container"><a href="index.php" class="text-dark text-decoration-none fw-bold fs-4"><i class="bi bi-arrow-left"></i> Tiếp tục mua sắm</a></div></header>
    <div class="container my-5 bg-white p-4 rounded shadow-sm" style="max-width: 900px;">
        <h3 class="mb-4 fw-bold border-bottom pb-3">Giỏ hàng của bạn</h3>
        <?php if(empty($cart_items)): ?>
            <div class="text-center py-5"><i class="bi bi-cart-x display-1 text-muted"></i><p class="mt-3 fs-5">Giỏ hàng trống.</p><a href="index.php" class="btn btn-warning px-4 py-2 fw-bold">Mua sắm ngay</a></div>
        <?php else: ?>
            <table class="table align-middle">
                <thead class="table-light"><tr><th>Sản phẩm</th><th>Đơn giá</th><th>SL</th><th>Thành tiền</th><th></th></tr></thead>
                <tbody>
                    <?php foreach($cart_items as $item): ?>
                    <tr>
                        <td><img src="<?= $item['image_url'] ?>" class="img-cart me-2"><span class="fw-bold"><?= $item['name'] ?></span></td>
                        <td class="text-danger fw-bold"><?= number_format($item['price'], 0, ',', '.') ?>₫</td>
                        <td><input type="number" class="form-control text-center px-1" value="<?= $item['qty'] ?>" readonly style="width:50px;"></td>
                        <td class="text-danger fw-bold"><?= number_format($item['subtotal'], 0, ',', '.') ?>₫</td>
                        <td><a href="index.php?action=remove_cart&id=<?= $item['id'] ?>" class="text-danger fs-5"><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center mt-4 border-top pt-4">
                <h4 class="fw-bold m-0">Tổng: <span class="text-danger"><?= number_format($total_price, 0, ',', '.') ?>₫</span></h4>
                <a href="index.php?action=checkout" class="btn btn-danger px-5 py-3 fw-bold fs-5 rounded-pill">TIẾN HÀNH ĐẶT HÀNG</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
