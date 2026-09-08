<?php
/**
 * Database connection (PDO / MySQL - XAMPP default settings)
 * Default XAMPP MySQL: host=localhost, user=root, password="" (empty)
 */
session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'don_vincent');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
