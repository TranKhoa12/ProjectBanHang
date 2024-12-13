<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Sửa sản phẩm</h1>
        <form method="POST" action="/projectbanhang/Product/edit/<?php echo $product->getID(); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả:</label>
                <textarea id="description" name="description" class="form-control" rows="4" required><?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá:</label>
                <input type="number" id="price" name="price" value="<?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?>" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="/projectbanhang/Product/list" class="btn btn-secondary">Quay lại danh sách sản phẩm</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (optional for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
