<?php
// products_api.php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { exit; }
header("Content-Type: application/json; charset=utf-8");


require __DIR__ . '/config.php'; 


$q   = isset($_GET['q'])   ? trim($_GET['q'])   : '';
$cat = isset($_GET['cat']) ? trim($_GET['cat']) : '';
$page  = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 20;

if ($limit < 1) $limit = 20;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

$where  = [];
$params = [];
$types  = '';

if ($q !== '') {
  $where[] = '(name LIKE ? OR description LIKE ? OR category LIKE ?)';
  $like = "%$q%";
  $params[] = $like; $params[] = $like; $params[] = $like;
  $types .= 'sss';
}

if ($cat !== '' && strtolower($cat) !== 'all') {
  $where[] = 'category = ?';
  $params[] = $cat;
  $types .= 's';
}

$sql = "SELECT id, name, description, price, category, color, size, image
        FROM products " . ($where ? 'WHERE ' . implode(' AND ', $where) : '') . "
        ORDER BY id DESC
        LIMIT ?, ?";
$params[] = $offset; $params[] = $limit;
$types .= 'ii';


$stmt = $conn->prepare($sql);
if ($params) {
  $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();

$items = [];
while ($row = $result->fetch_assoc()) {
  
  $img = trim($row['image'] ?? '');
  if ($img === '') {
    $img = '/front-backend-styleme/front-end/assets/imgs/placeholder.jpg';
  } elseif ($img[0] !== '/') {
    $img = '/' . ltrim($img, '/');
  }
  $row['image'] = $img;
  $items[] = $row;
}


echo json_encode(['items' => $items], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
