-- ==============================
-- DATABASE
-- ==============================
CREATE DATABASE IF NOT EXISTS ecommerce_clothing;
USE ecommerce_clothing;

-- ==============================
-- ROLES
-- ==============================
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- ==============================
-- USERS
-- ==============================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_id INT DEFAULT 2,
    name VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    phone VARCHAR(20),
    password VARCHAR(255),
    status ENUM('active','inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==============================
-- CATEGORIES
-- ==============================
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    parent_id INT DEFAULT NULL,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(150) UNIQUE,
    status ENUM('active','inactive') DEFAULT 'active'
);

-- ==============================
-- BRANDS
-- ==============================
CREATE TABLE brands (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) UNIQUE,
    logo VARCHAR(255),
    status ENUM('active','inactive') DEFAULT 'active'
);

-- ==============================
-- PRODUCTS
-- ==============================
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    brand_id INT,
    name VARCHAR(200),
    slug VARCHAR(220) UNIQUE,
    description TEXT,
    base_price DECIMAL(10,2),
    status ENUM('active','inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==============================
-- SIZES
-- ==============================
CREATE TABLE sizes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) UNIQUE
);

-- ==============================
-- COLORS
-- ==============================
CREATE TABLE colors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    hex_code VARCHAR(10)
);

-- ==============================
-- PRODUCT VARIANTS
-- ==============================
CREATE TABLE product_variants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    size_id INT,
    color_id INT,
    price DECIMAL(10,2),
    sku VARCHAR(100) UNIQUE,
    stock INT DEFAULT 0,
    status ENUM('active','inactive') DEFAULT 'active'
);

-- ==============================
-- PRODUCT IMAGES
-- ==============================
CREATE TABLE product_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    image VARCHAR(255),
    is_main TINYINT(1) DEFAULT 0
);

-- ==============================
-- CARTS (for logged users)
-- ==============================
CREATE TABLE carts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==============================
-- CART ITEMS
-- ==============================
CREATE TABLE cart_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cart_id INT,
    variant_id INT,
    quantity INT DEFAULT 1
);

-- ==============================
-- ORDERS
-- ==============================
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    order_number VARCHAR(50),
    subtotal DECIMAL(10,2),
    discount DECIMAL(10,2) DEFAULT 0,
    total DECIMAL(10,2),
    status ENUM('pending','paid','shipped','delivered','cancelled') DEFAULT 'pending',
    payment_method VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==============================
-- ORDER ITEMS
-- ==============================
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    variant_id INT,
    price DECIMAL(10,2),
    quantity INT
);

-- ==============================
-- SHIPPING ADDRESSES
-- ==============================
CREATE TABLE shipping_addresses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    name VARCHAR(100),
    phone VARCHAR(20),
    address TEXT,
    city VARCHAR(100),
    postal_code VARCHAR(20),
    country VARCHAR(100)
);

-- ==============================
-- PAYMENTS
-- ==============================
CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    transaction_id VARCHAR(150),
    amount DECIMAL(10,2),
    method VARCHAR(50),
    status ENUM('pending','success','failed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==============================
-- COUPONS
-- ==============================
CREATE TABLE coupons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(50) UNIQUE,
    discount_type ENUM('percentage','fixed'),
    discount_value DECIMAL(10,2),
    min_amount DECIMAL(10,2) DEFAULT 0,
    expiry_date DATE,
    status ENUM('active','inactive') DEFAULT 'active'
);

-- ==============================
-- REVIEWS
-- ==============================
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    rating TINYINT,
    comment TEXT,
    status ENUM('active','inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
