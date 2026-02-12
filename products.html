<?php
require __DIR__ . '/config.php'; 

$q   = isset($_GET['q'])   ? trim($_GET['q'])   : '';
$cat = isset($_GET['cat']) ? trim($_GET['cat']) : '';

$where  = [];
$params = [];
$types  = '';

if ($q !== '') {
  $where[] = '(name LIKE ? OR description LIKE ? OR category LIKE ?)';
  $like = "%$q%";
  $params[] = $like; $params[] = $like; $params[] = $like;
  $types   .= 'sss';
}
if ($cat !== '' && strtolower($cat) !== 'all') {
  $where[] = 'category = ?';
  $params[] = $cat;
  $types   .= 's';
}

$sql = "SELECT id,name,description,price,category,color,size,image
        FROM products " . ($where ? 'WHERE '.implode(' AND ',$where) : '') . "
        ORDER BY id DESC";

$stmt = $conn->prepare($sql);
if ($params) { $stmt->bind_param($types, ...$params); }
$stmt->execute();
$res = $stmt->get_result();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Stylmee – Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:Arial, sans-serif; margin:24px; background:#FAF6F0}
    h1{margin:0 0 16px}
    form{margin:0 0 16px; display:flex; gap:8px; flex-wrap:wrap}
    input,select,button{padding:8px 10px; border:1px solid #ddd; border-radius:8px}
    button{background:#e8c26a; border:none; font-weight:700; cursor:pointer}
    .grid{display:grid; grid-template-columns:repeat(auto-fill,minmax(240px,1fr)); gap:16px}
    .card{background:#fff; border:1px solid #eee; border-radius:12px; padding:12px}
    .thumb{width:100%; height:200px; object-fit:cover; border-radius:10px; background:#f6f6f6}
    .name{font-weight:600; margin:8px 0 4px}
    .meta{color:#666; font-size:13px}
    .price{font-weight:700; margin-top:8px}
  </style>
</head>
<body>
  <h1>Products</h1>

  <form method="get">
    <input type="search" name="q" placeholder="Search…" value="<?=htmlspecialchars($q)?>">
    <select name="cat">
      <option value="">All</option>
      <option <?= $cat==='Dresses'?'selected':'' ?>>Dresses</option>
      <option <?= $cat==='Abayas'?'selected':'' ?>>Abayas</option>
      <option <?= $cat==='T-shirts'?'selected':'' ?>>T-shirts</option>
      <option <?= $cat==='Accessories'?'selected':'' ?>>Accessories</option>
      <option <?= $cat==='Blazers'?'selected':'' ?>>Blazers</option>
      <option <?= $cat==='Pants'?'selected':'' ?>>Pants</option>
    </select>
    <button type="submit">Filter</button>
  </form>

  <div class="grid">
    <?php if ($res && $res->num_rows): while($p = $res->fetch_assoc()):
      $img = $p['image'] ?: '/front-backend-styleme/front-end/assets/imgs/placeholder.jpg';
    ?>
      <div class="card">
        <?php
  
  $raw = trim($p['image']); 
  if ($raw === '' || $raw === null) {
      $img = '/front-backend-styleme/front-end/assets/imgs/placeholder.jpg';
  } else {
      
      if ($raw[0] !== '/') {
          $img = '/' . ltrim($raw, '/');
      } else {
          $img = $raw;
      }
  }
?>
<img class="thumb"
     src="<?= htmlspecialchars($img) ?>"
     alt="<?= htmlspecialchars($p['name']) ?>"
     onerror="this.src='/front-backend-styleme/front-end/assets/imgs/placeholder.jpg';">

        <div class="name"><?=htmlspecialchars($p['name'])?></div>
        <div class="meta">Category: <?=htmlspecialchars($p['category']?:'-')?> | Color: <?=htmlspecialchars($p['color']?:'-')?> | Size: <?=htmlspecialchars($p['size']?:'-')?></div>
        <div class="price"><?=number_format((float)$p['price'], 2)?> SAR</div>
        <div class="meta"><?=htmlspecialchars($p['description']?:'')?></div>
      </div>
    <?php endwhile; else: ?>
      No products available.
    <?php endif; ?>
  </div>
</body>
</html>
