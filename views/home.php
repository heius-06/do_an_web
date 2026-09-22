<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thế Giới Điện Thoại - HKT Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f1f1f1; font-family: Arial, sans-serif; }
        .tgdd-header { background-color: #ffd400; padding: 15px 0; }
        .search-form { display: flex; width: 100%; max-width: 500px; }
        .search-input { border-radius: 4px 0 0 4px; border: none; padding: 10px 15px; width: 100%; outline: none; }
        .search-btn { border-radius: 0 4px 4px 0; border: none; background: #fff; padding: 0 15px; }
        .btn-brand { border: 1px solid #e0e0e0; border-radius: 20px; padding: 5px 15px; color: #333; text-decoration: none; margin-right: 10px; font-weight: bold; background: #fff; }
        .btn-brand.active { border-color: #288ad6; color: #288ad6; }
        .card-product { background: #fff; border-radius: 8px; padding: 15px; margin-bottom: 20px; position: relative; height: 100%; display: flex; flex-direction: column; }
        .product-img { width: 100%; height: 210px; object-fit: contain; margin-bottom: 15px; }
        .badge-discount { position: absolute; top: 10px; left: 10px; background: #e30019; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: bold; }
        .product-name { font-size: 14px; font-weight: bold; color: #333; text-decoration: none; }
        .price-new { color: #d0021c; font-weight: bold; font-size: 18px; }
        .price-old { color: #999; text-decoration: line-through; font-size: 14px; margin-left: 10px; }
        .cart-badge { background: #d0021c; color: white; border-radius: 50%; padding: 2px 6px; font-size: 12px; margin-left: 5px; }
        .action-btns { display: flex; gap: 5px; margin-top: auto; }
        .btn-add { flex: 1; border: 1px solid #288ad6; color: #288ad6; background: #fff; border-radius: 4px; padding: 8px 0; font-weight: bold; text-align: center; text-decoration: none; }
        .btn-add:hover { background: #288ad6; color: #fff; }
        .btn-buy { flex: 1; background: #cb1c22; color: #fff; border-radius: 4px; padding: 8px 0; font-weight: bold; text-align: center; text-decoration: none; }
        .btn-buy:hover { background: #a4171b; color: #fff; }
    </style>
</head>
<body>
    <header class="tgdd-header sticky-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.php" class="text-decoration-none text-dark"><h2 class="mb-0 fw-bold">HKT<span class="text-white">Shop</span></h2></a>
            <form class="search-form mx-4" action="index.php" method="GET">
                <input type="text" name="search" class="search-input" placeholder="Bạn tìm điện thoại gì..." value="<?= htmlspecialchars($search_keyword) ?>">
                <button type="submit" class="search-btn"><i class="bi bi-search"></i></button>
            </form>
            <a href="index.php?action=cart" class="btn btn-dark fw-bold rounded-pill px-4">
                <i class="bi bi-cart3"></i> Giỏ hàng 
                <?php if($cart_count > 0): ?><span class="cart-badge"><?= $cart_count ?></span><?php endif; ?>
            </a>
        </div>
    </header>

    <div class="container my-4">
        <div class="mb-4">
            <span class="fw-bold me-3">Lọc theo hãng:</span>
            <a href="index.php" class="btn-brand <?= empty($brand_filter) ? 'active' : '' ?>">Tất cả</a>
            <a href="index.php?brand=Apple" class="btn-brand <?= $brand_filter=='Apple' ? 'active' : '' ?>">Apple</a>
            <a href="index.php?brand=Samsung" class="btn-brand <?= $brand_filter=='Samsung' ? 'active' : '' ?>">Samsung</a>
        </div>

        <div class="row g-3">
            <?php foreach ($phones as $phone): ?>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card-product shadow-sm">
                    <?php if(!empty($phone['discount_label'])): ?><div class="badge-discount"><?= htmlspecialchars($phone['discount_label']) ?></div><?php endif; ?>
                    <img src="<?= htmlspecialchars($phone['image_url']) ?>" class="product-img" alt="<?= htmlspecialchars($phone['name']) ?>">
                    <a href="#" class="product-name mb-2"><?= htmlspecialchars($phone['name']) ?></a>
                    <div class="mb-3">
                        <span class="price-new"><?= number_format($phone['price'], 0, ',', '.') ?>₫</span>
                        <?php if($phone['old_price'] > 0): ?><span class="price-old"><?= number_format($phone['old_price'], 0, ',', '.') ?>₫</span><?php endif; ?>
                    </div>
                    <div class="action-btns">
                        <a href="index.php?action=add_cart&id=<?= $phone['id'] ?>" class="btn-add"><i class="bi bi-cart-plus"></i> Thêm</a>
                        <a href="index.php?action=buy_now&id=<?= $phone['id'] ?>" class="btn-buy">Mua ngay</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div id="cartToast" class="toast text-bg-success border-0"><div class="d-flex"><div class="toast-body fw-bold">Đã thêm vào giỏ!</div></div></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.css"></script>
    <script>
        if (window.location.search.includes('added=true')) {
            new bootstrap.Toast(document.getElementById('cartToast')).show();
            window.history.replaceState({}, document.title, "index.php");
        }
    </script>
</body>
</html>
