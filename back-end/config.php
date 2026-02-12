<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// إعداد الاتصال بقاعدة البيانات stylmee
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db   = 'stylmee';
$port = 3306; 

$conn = @new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_errno) {
  die("❌ Database connection failed: [" . $conn->connect_errno . "] " . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
