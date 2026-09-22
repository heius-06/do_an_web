SET NAMES 'utf8mb4';
DROP TABLE IF EXISTS products;
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    brand VARCHAR(50) NOT NULL,
    price INT NOT NULL,
    old_price INT,
    discount_label VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    image_url TEXT NOT NULL,
    ram VARCHAR(20),
    rom VARCHAR(20),
    rating FLOAT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO products (name, brand, price, old_price, discount_label, image_url, ram, rom, rating) VALUES
('iPhone 15 Pro Max', 'Apple', 29490000, 34990000, 'Giảm 15%', 'https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-thumbnew-600x600.jpg', '8 GB', '256 GB', 5.0),
('iPhone 15 Pro', 'Apple', 24990000, 28990000, 'Thu cũ trợ giá', 'https://cdn.tgdd.vn/Products/Images/42/299033/iphone-15-pro-blue-thumbnew-600x600.jpg', '8 GB', '128 GB', 4.9),
('iPhone 15', 'Apple', 19990000, 22990000, 'Hot Sale', 'https://cdn.tgdd.vn/Products/Images/42/281570/iphone-15-hong-thumb-600x600.jpg', '6 GB', '128 GB', 4.8),
('Galaxy S24 Ultra', 'Samsung', 33990000, 37990000, 'Tặng 2 triệu', 'https://cdn.tgdd.vn/Products/Images/42/307174/samsung-galaxy-s24-ultra-grey-thumb-600x600.jpg', '12 GB', '256 GB', 4.8),
('Galaxy Z Fold5', 'Samsung', 40990000, 44990000, 'Giảm sốc 4Tr', 'https://cdn.tgdd.vn/Products/Images/42/301608/samsung-galaxy-z-fold5-blue-thumbnew-600x600.jpg', '12 GB', '512 GB', 4.9),
('Xiaomi Redmi Note 13', 'Xiaomi', 4890000, 5290000, 'Bảo hành 24T', 'https://cdn.tgdd.vn/Products/Images/42/309831/xiaomi-redmi-note-13-gold-thumb-600x600.jpg', '8 GB', '128 GB', 4.5),
('OPPO Find N2 Flip', 'OPPO', 16990000, 19990000, 'Giảm 3 Triệu', 'https://cdn.tgdd.vn/Products/Images/42/300121/oppo-find-n2-flip-tim-thumb-600x600.jpg', '8 GB', '256 GB', 4.9),
('OPPO Reno10 5G', 'OPPO', 9490000, 9990000, 'Mới ra mắt', 'https://cdn.tgdd.vn/Products/Images/42/304481/oppo-reno10-blue-thumbnew-600x600.jpg', '8 GB', '256 GB', 4.5);
