<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thế Giới Điện Thoại - HKT Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f1f1f1; font-family: Arial, sans-serif; }
        .tgdd-header { background-color: #ffd400; padding: 15px 0; }
        .search-form { display: flex; width: 100%; max-width: 500px; }
        .search-input { border-radius: 4px 0 0 4px; border: none; padding: 10px 15px; width: 100%; outline: none; }
        .search-btn { border-radius: 0 4px 4px 0; border: none; background: #fff; padding: 0 15px; }
        .filter-box { background: #fff; padding: 15px; border-radius: 8px; margin-bottom: 20px; }
        .btn-brand { border: 1px solid #e0e0e0; border-radius: 20px; padding: 5px 15px; color: #333; text-decoration: none; margin-right: 10px; font-weight: bold; font-size: 14px; transition: 0.2s;}
        .btn-brand:hover, .btn-brand.active { border-color: #288ad6; color: #288ad6; }
        
        .card-product { background: #fff; border-radius: 8px; padding: 15px; margin-bottom: 20px; box-shadow: 0 1px 2px 0 rgba(60,64,67,.1); transition: all 0.3s; position: relative; display: flex; flex-direction: column; height: 100%; }
        .card-product:hover { box-shadow: 0 1px 3px 0 rgba(0,0,0,.2), 0 4px 8px 3px rgba(0,0,0,.15); transform: translateY(-3px); }
        .product-img { width: 100%; height: 210px; object-fit: contain; margin-bottom: 15px; }
        .badge-discount { position: absolute; top: 10px; left: 10px; background: #e30019; color: #fff; padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: bold; z-index: 2; }
        .product-name { font-size: 14px; font-weight: bold; color: #333; margin-bottom: 8px; text-decoration: none; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .product-name:hover { color: #288ad6; }
        .specs span { border: 1px solid #e0e0e0; padding: 3px 6px; border-radius: 4px; margin-right: 5px; font-size: 11px; color: #666; background: #f8f9fa; }
        .price-new { color: #d0021c; font-weight: bold; font-size: 18px; margin-right: 10px; }
        .price-old { color: #999; text-decoration: line-through; font-size: 14px; }
        
        /* Nút giỏ hàng */
        .btn-add-cart { margin-top: auto; border: 1px solid #288ad6; background: #fff; color: #288ad6; border-radius: 4px; padding: 8px; text-align: center; font-weight: bold; text-decoration: none; transition: 0.3s; }
        .btn-add-cart:hover { background: #288ad6; color: #fff; }
        .cart-badge { background: #d0021c; color: white; border-radius: 50%; padding: 2px 6px; font-size: 12px; position: relative; top: -2px; }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="tgdd-header sticky-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.php" class="text-decoration-none">
                <h2 class="mb-0 fw-bold me-4 text-dark">HKT<span class="text-white">Shop</span></h2>
            </a>
            
            <form class="search-form mx-4" action="index.php" method="GET">
                <input type="text" name="search" class="search-input" placeholder="Bạn tìm điện thoại gì..." value="<?= htmlspecialchars($search_keyword) ?>">
                <button type="submit" class="search-btn"><i class="bi bi-search"></i></button>
            </form>
            
            <a href="#" class="btn btn-dark fw-bold rounded-pill px-4">
                <i class="bi bi-cart3"></i> Giỏ hàng 
                <?php if($cart_count > 0): ?>
                    <span class="cart-badge"><?= $cart_count ?></span>
                <?php endif; ?>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container my-4">
        
        <div class="filter-box d-flex align-items-center flex-wrap">
            <span class="fw-bold me-3">Lọc theo hãng:</span>
            <a href="index.php" class="btn-brand <?= empty($brand_filter) ? 'active' : '' ?>">Tất cả</a>
            <a href="index.php?brand=Apple" class="btn-brand <?= $brand_filter=='Apple' ? 'active' : '' ?>">Apple</a>
            <a href="index.php?brand=Samsung" class="btn-brand <?= $brand_filter=='Samsung' ? 'active' : '' ?>">Samsung</a>
            <a href="index.php?brand=Xiaomi" class="btn-brand <?= $brand_filter=='Xiaomi' ? 'active' : '' ?>">Xiaomi</a>
            <a href="index.php?brand=OPPO" class="btn-brand <?= $brand_filter=='OPPO' ? 'active' : '' ?>">OPPO</a>
        </div>

        <?php if(!empty($search_keyword)): ?>
            <h5 class="mb-4">Kết quả tìm kiếm cho: "<strong><?= htmlspecialchars($search_keyword) ?></strong>" (<?= count($phones) ?> kết quả)</h5>
        <?php endif; ?>
        
        <div class="row g-3">
            <?php if(count($phones) > 0): ?>
                <?php foreach ($phones as $phone): ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card-product">
                        <?php if(!empty($phone['discount_label'])): ?>
                            <div class="badge-discount"><?= htmlspecialchars($phone['discount_label']) ?></div>
                        <?php endif; ?>
                        
                        <a href="#"><img src="<?= htmlspecialchars($phone['image_url']) ?>" class="product-img" alt="<?= htmlspecialchars($phone['name']) ?>"></a>
                        
                        <a href="#" class="product-name"><?= htmlspecialchars($phone['name']) ?></a>
                        
                        <div class="specs mb-3">
                            <span><?= htmlspecialchars($phone['ram']) ?></span>
                            <span><?= htmlspecialchars($phone['rom']) ?></span>
                        </div>
                        
                        <div class="mb-3">
                            <span class="price-new"><?= number_format($phone['price'], 0, ',', '.') ?>₫</span>
                            <?php if($phone['old_price'] > 0): ?>
                                <span class="price-old"><?= number_format($phone['old_price'], 0, ',', '.') ?>₫</span>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Tính năng nâng cao: Nút thêm vào giỏ -->
                        <a href="index.php?action=add&id=<?= $phone['id'] ?>" class="btn-add-cart mt-auto">
                            <i class="bi bi-cart-plus"></i> Thêm vào giỏ
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <i class="bi bi-emoji-frown display-1 text-muted"></i>
                    <h4 class="mt-3 text-muted">Không tìm thấy sản phẩm nào phù hợp.</h4>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Thông báo nổi (Toast) khi thêm vào giỏ thành công -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div id="cartToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body fw-bold">
            <i class="bi bi-check-circle-fill me-2"></i> Đã thêm sản phẩm vào giỏ hàng!
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.css"></script>
    <script>
        // Tự động hiện thông báo nếu URL có chứa ?added=true
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('added')) {
            const toastEl = document.getElementById('cartToast');
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
            // Xóa chữ added khỏi URL để F5 không bị hiện lại
            window.history.replaceState({}, document.title, "index.php");
        }
    </script>
</body>
</html>
