<?php
// Bắt đầu session nếu chưa được bắt đầu
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Include file kết nối cơ sở dữ liệu và model
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/ProductModel.php';

// Lấy ID sản phẩm từ URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Kiểm tra nếu ID hợp lệ
if ($id > 0) {
    // Chuẩn bị câu truy vấn để lấy thông tin sản phẩm
    $stmt = $pdo->prepare("SELECT * FROM product WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die("Sản phẩm không tồn tại.");
    }
} else {
    die("ID sản phẩm không hợp lệ.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="/webbanhang/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Chi tiết sản phẩm</h1>
        <div class="product-details">
            <h2><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <p><strong>Mô tả:</strong> <?php echo htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Giá:</strong> <?php echo number_format($product['price'], 2); ?> VND</p>
            <?php if (!empty($product['image'])): ?>
                <img src="/webbanhang/public/images/<?php echo htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="Hình ảnh sản phẩm" style="max-width: 300px;">
            <?php else: ?>
                <p><em>Không có hình ảnh sản phẩm.</em></p>
            <?php endif; ?>
        </div>
        <a href="/webbanhang/Product/list">Quay lại danh sách sản phẩm</a>
    </div>
</body>
</html>
