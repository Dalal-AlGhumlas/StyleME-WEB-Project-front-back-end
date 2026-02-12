<?php
// back-end/auth/register.php
header("Content-Type: application/json; charset=utf-8");

session_start();
require __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(["error" => "Method not allowed"]); exit;
}

$name  = trim($_POST['name']  ?? '');
$email = trim($_POST['email'] ?? '');
$pass  = trim($_POST['password'] ?? '');
$phone = trim($_POST['phone'] ?? '');

if ($name === '' || $email === '' || $pass === '') {
  http_response_code(422);
  echo json_encode(["error" => "Missing required fields"]); exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(422);
  echo json_encode(["error" => "Invalid email"]); exit;
}
if (strlen($pass) < 6) {
  http_response_code(422);
  echo json_encode(["error" => "Password must be at least 6 characters"]); exit;
}

$hash = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (name,email,password_hash,phone) VALUES (?,?,?,?)");
$stmt->bind_param('ssss', $name, $email, $hash, $phone);
if (!$stmt->execute()) {
  // 1062 = duplicate entry (email unique)
  if ($conn->errno == 1062) {
    http_response_code(409);
    echo json_encode(["error" => "Email already registered"]); exit;
  }
  http_response_code(500);
  echo json_encode(["error" => "DB error"]); exit;
}

$user_id = $stmt->insert_id;
$_SESSION['user'] = ["id"=>$user_id, "name"=>$name, "email"=>$email];

echo json_encode([
  "success" => true,
  "user" => $_SESSION['user']
]);
