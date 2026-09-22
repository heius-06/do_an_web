<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"><title>Thanh toán - HKT Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>body{background:#f1f1f1;} .tgdd-header{background:#ffd400; padding:15px 0;}</style>
</head>
<body>
    <header class="tgdd-header"><div class="container"><a href="index.php?action=cart" class="text-dark text-decoration-none fw-bold fs-4">Quay lại giỏ hàng</a></div></header>
    <div class="container my-5 bg-white p-5 rounded shadow-sm" style="max-width: 600px;">
        <h3 class="mb-4 fw-bold text-center">Thông tin nhận hàng</h3>
        <form action="index.php?action=process_checkout" method="POST">
            <div class="mb-3"><label class="form-label fw-bold">Họ và tên</label><input type="text" class="form-control p-3" required placeholder="Nhập họ và tên"></div>
            <div class="mb-3"><label class="form-label fw-bold">Số điện thoại</label><input type="tel" class="form-control p-3" required placeholder="Nhập số điện thoại"></div>
            <div class="mb-4"><label class="form-label fw-bold">Địa chỉ</label><textarea class="form-control p-3" rows="3" required placeholder="Nhập địa chỉ giao hàng"></textarea></div>
            <button type="submit" class="btn btn-danger w-100 py-3 fw-bold fs-5 rounded-pill">XÁC NHẬN MUA HÀNG</button>
        </form>
    </div>
</body>
</html>
