CREATE DATABASE IF NOT EXISTS hkt_shop CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE hkt_shop;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    brand VARCHAR(50) NOT NULL,
    price INT NOT NULL,
    old_price INT,
    discount_label VARCHAR(50),
    image_url TEXT NOT NULL,
    ram VARCHAR(20),
    rom VARCHAR(20),
    rating FLOAT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

TRUNCATE TABLE products;

INSERT INTO products (name, brand, price, old_price, discount_label, image_url, ram, rom, rating) VALUES
('iPhone 15 Pro Max', 'Apple', 29490000, 34990000, 'Giảm 15%', 'https://placehold.co/400x500/f5f5f7/1d1d1f?font=roboto&text=iPhone+15\nPro+Max', '8 GB', '256 GB', 5.0),
('iPhone 15 Pro', 'Apple', 24990000, 28990000, 'Thu cũ trợ giá', 'https://placehold.co/400x500/f5f5f7/1d1d1f?font=roboto&text=iPhone+15\nPro', '8 GB', '128 GB', 4.9),
('iPhone 15', 'Apple', 19990000, 22990000, 'Hot Sale', 'https://placehold.co/400x500/f5f5f7/1d1d1f?font=roboto&text=iPhone+15', '6 GB', '128 GB', 4.8),
('iPhone 14 Pro Max', 'Apple', 26490000, 29990000, '', 'https://placehold.co/400x500/f5f5f7/1d1d1f?font=roboto&text=iPhone+14\nPro+Max', '6 GB', '256 GB', 4.8),
('iPhone 13', 'Apple', 13990000, 18990000, 'Xả kho', 'https://placehold.co/400x500/f5f5f7/1d1d1f?font=roboto&text=iPhone+13', '4 GB', '128 GB', 4.7),

('Galaxy S24 Ultra', 'Samsung', 33990000, 37990000, 'Tặng 2 triệu', 'https://placehold.co/400x500/f4f4f4/000000?font=roboto&text=Galaxy+S24\nUltra', '12 GB', '256 GB', 4.8),
('Galaxy S24+', 'Samsung', 26990000, 29990000, '', 'https://placehold.co/400x500/f4f4f4/000000?font=roboto&text=Galaxy+S24+', '12 GB', '256 GB', 4.7),
('Galaxy Z Fold5', 'Samsung', 40990000, 44990000, 'Giảm sốc 4Tr', 'https://placehold.co/400x500/f4f4f4/000000?font=roboto&text=Galaxy+Z\nFold5', '12 GB', '512 GB', 4.9),
('Galaxy Z Flip5', 'Samsung', 18990000, 25990000, 'Giảm 26%', 'https://placehold.co/400x500/f4f4f4/000000?font=roboto&text=Galaxy+Z\nFlip5', '8 GB', '256 GB', 4.6),
('Galaxy A55 5G', 'Samsung', 9690000, 10490000, 'Mới ra mắt', 'https://placehold.co/400x500/f4f4f4/000000?font=roboto&text=Galaxy+A55', '8 GB', '128 GB', 4.5),
('Galaxy A35 5G', 'Samsung', 7990000, 8490000, '', 'https://placehold.co/400x500/f4f4f4/000000?font=roboto&text=Galaxy+A35', '8 GB', '128 GB', 4.4),

('Xiaomi 14', 'Xiaomi', 19990000, 22990000, 'Bảo hành 24T', 'https://placehold.co/400x500/ff6700/ffffff?font=roboto&text=Xiaomi+14', '12 GB', '256 GB', 4.5),
('Xiaomi 13T Pro', 'Xiaomi', 14990000, 16990000, 'Giảm 11%', 'https://placehold.co/400x500/ff6700/ffffff?font=roboto&text=Xiaomi+13T\nPro', '12 GB', '512 GB', 4.6),
('Redmi Note 13 Pro+', 'Xiaomi', 10490000, 10990000, '', 'https://placehold.co/400x500/ff6700/ffffff?font=roboto&text=Redmi+Note+13\nPro+', '8 GB', '256 GB', 4.4),
('POCO X6 Pro', 'Xiaomi', 8490000, 8990000, 'Chỉ bán Online', 'https://placehold.co/400x500/ff6700/ffffff?font=roboto&text=POCO+X6\nPro', '8 GB', '256 GB', 4.7),

('OPPO Find N3', 'OPPO', 44990000, 44990000, 'Pre-order', 'https://placehold.co/400x500/000000/01b15a?font=roboto&text=OPPO+Find\nN3', '16 GB', '512 GB', 4.9),
('OPPO Reno11 Pro', 'OPPO', 16990000, 0, 'Hot', 'https://placehold.co/400x500/000000/01b15a?font=roboto&text=OPPO\nReno11+Pro', '12 GB', '512 GB', 4.7),
('OPPO Reno11 F', 'OPPO', 8990000, 8990000, '', 'https://placehold.co/400x500/000000/01b15a?font=roboto&text=OPPO\nReno11+F', '8 GB', '256 GB', 4.5),
('OPPO A79 5G', 'OPPO', 7490000, 7990000, 'Giảm 500k', 'https://placehold.co/400x500/000000/01b15a?font=roboto&text=OPPO+A79', '8 GB', '256 GB', 4.3),

('vivo V30', 'vivo', 13990000, 13990000, 'Camera Aura', 'https://placehold.co/400x500/4169E1/ffffff?font=roboto&text=vivo+V30', '12 GB', '512 GB', 4.6);
