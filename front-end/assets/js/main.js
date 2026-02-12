<?php
// back-end/auth/login.php
header("Content-Type: application/json; charset=utf-8");


session_start();
require __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(["error" => "Method not allowed"]); exit;
}

$email = trim($_POST['email'] ?? '');
$pass  = trim($_POST['password'] ?? '');

if ($email === '' || $pass === '') {
  http_response_code(422);
  echo json_encode(["error" => "Missing email or password"]); exit;
}

$stmt = $conn->prepare("SELECT id,name,email,password_hash FROM users WHERE email=? LIMIT 1");
$stmt->bind_param('s', $email);
$stmt->execute();
$res = $stmt->get_result();
$user = $res->fetch_assoc();

if (!$user || !password_verify($pass, $user['password_hash'])) {
  http_response_code(401);
  echo json_encode(["error" => "Invalid credentials"]); exit;
}

$_SESSION['user'] = ["id"=>$user['id'], "name"=>$user['name'], "email"=>$user['email']];

echo json_encode([
  "success" => true,
  "user" => $_SESSION['user']
]);
