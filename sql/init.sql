CREATE DATABASE IF NOT EXISTS hkt_shop;
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
);

TRUNCATE TABLE products;

INSERT INTO products (name, brand, price, old_price, discount_label, image_url, ram, rom, rating) VALUES
/* Apple */
('iPhone 15 Pro Max 256GB', 'Apple', 29490000, 34990000, 'Giảm 15%', 'https://images.unsplash.com/photo-1695048133142-1a20484d2569?q=80&w=600&auto=format&fit=crop', '8 GB', '256 GB', 5.0),
('iPhone 15 Pro 128GB', 'Apple', 24990000, 28990000, 'Thu cũ trợ giá', 'https://images.unsplash.com/photo-1695048133142-1a20484d2569?q=80&w=600&auto=format&fit=crop', '8 GB', '128 GB', 4.9),
('iPhone 15 128GB', 'Apple', 19990000, 22990000, 'Hot Sale', 'https://images.unsplash.com/photo-1696446701796-da61225697cc?q=80&w=600&auto=format&fit=crop', '6 GB', '128 GB', 4.8),
('iPhone 14 Pro Max 256GB', 'Apple', 26490000, 29990000, '', 'https://images.unsplash.com/photo-1695048133142-1a20484d2569?q=80&w=600&auto=format&fit=crop', '6 GB', '256 GB', 4.8),
('iPhone 13 128GB', 'Apple', 13990000, 18990000, 'Xả kho', 'https://images.unsplash.com/photo-1696446701796-da61225697cc?q=80&w=600&auto=format&fit=crop', '4 GB', '128 GB', 4.7),

/* Samsung */
('Samsung Galaxy S24 Ultra 5G', 'Samsung', 33990000, 37990000, 'Tặng 2 triệu', 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?q=80&w=600&auto=format&fit=crop', '12 GB', '256 GB', 4.8),
('Samsung Galaxy S24+ 5G', 'Samsung', 26990000, 29990000, '', 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?q=80&w=600&auto=format&fit=crop', '12 GB', '256 GB', 4.7),
('Samsung Galaxy Z Fold5 5G', 'Samsung', 40990000, 44990000, 'Giảm sốc 4Tr', 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?q=80&w=600&auto=format&fit=crop', '12 GB', '512 GB', 4.9),
('Samsung Galaxy Z Flip5 5G', 'Samsung', 18990000, 25990000, 'Giảm 26%', 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?q=80&w=600&auto=format&fit=crop', '8 GB', '256 GB', 4.6),
('Samsung Galaxy A55 5G', 'Samsung', 9690000, 10490000, 'Mới ra mắt', 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?q=80&w=600&auto=format&fit=crop', '8 GB', '128 GB', 4.5),
('Samsung Galaxy A35 5G', 'Samsung', 7990000, 8490000, '', 'https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?q=80&w=600&auto=format&fit=crop', '8 GB', '128 GB', 4.4),

/* Xiaomi */
('Xiaomi 14 5G', 'Xiaomi', 19990000, 22990000, 'Bảo hành 24T', 'https://images.unsplash.com/photo-1649859394657-9430dc079dd2?q=80&w=600&auto=format&fit=crop', '12 GB', '256 GB', 4.5),
('Xiaomi 13T Pro 5G', 'Xiaomi', 14990000, 16990000, 'Giảm 11%', 'https://images.unsplash.com/photo-1649859394657-9430dc079dd2?q=80&w=600&auto=format&fit=crop', '12 GB', '512 GB', 4.6),
('Redmi Note 13 Pro+ 5G', 'Xiaomi', 10490000, 10990000, '', 'https://images.unsplash.com/photo-1649859394657-9430dc079dd2?q=80&w=600&auto=format&fit=crop', '8 GB', '256 GB', 4.4),
('POCO X6 Pro 5G', 'Xiaomi', 8490000, 8990000, 'Chỉ bán Online', 'https://images.unsplash.com/photo-1649859394657-9430dc079dd2?q=80&w=600&auto=format&fit=crop', '8 GB', '256 GB', 4.7),

/* OPPO */
('OPPO Find N3 5G', 'OPPO', 44990000, 44990000, 'Pre-order', 'https://images.unsplash.com/photo-1678911820864-e2c567c655d7?q=80&w=600&auto=format&fit=crop', '16 GB', '512 GB', 4.9),
('OPPO Reno11 Pro 5G', 'OPPO', 16990000, 0, 'Hot', 'https://images.unsplash.com/photo-1678911820864-e2c567c655d7?q=80&w=600&auto=format&fit=crop', '12 GB', '512 GB', 4.7),
('OPPO Reno11 F 5G', 'OPPO', 8990000, 8990000, '', 'https://images.unsplash.com/photo-1678911820864-e2c567c655d7?q=80&w=600&auto=format&fit=crop', '8 GB', '256 GB', 4.5),
('OPPO A79 5G', 'OPPO', 7490000, 7990000, 'Giảm 500k', 'https://images.unsplash.com/photo-1678911820864-e2c567c655d7?q=80&w=600&auto=format&fit=crop', '8 GB', '256 GB', 4.3),

/* vivo & realme */
('vivo V30 5G', 'vivo', 13990000, 13990000, 'Camera Aura', 'https://images.unsplash.com/photo-1678911820864-e2c567c655d7?q=80&w=600&auto=format&fit=crop', '12 GB', '512 GB', 4.6),
('realme 12 Pro+ 5G', 'realme', 11990000, 12990000, '', 'https://images.unsplash.com/photo-1678911820864-e2c567c655d7?q=80&w=600&auto=format&fit=crop', '12 GB', '256 GB', 4.5);