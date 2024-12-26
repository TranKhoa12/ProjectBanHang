<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-4">
    <h1 class="text-center">Giỏ hàng</h1>

    <?php if (!empty($cart)): ?>
    <ul class="list-group">
        <?php foreach ($cart as $id => $item): ?>
        <li class="list-group-item mb-3">
            <h2 class="h5">
                <?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>
            </h2>
            <?php if ($item['image']): ?>
            <img src="/projectbanhang/<?php echo $item['image']; ?>" alt="Product Image" class="img-thumbnail" style="max-width: 150px;">
            <?php endif; ?>
            <p class="mt-2">Giá: <?php echo htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8'); ?> VND</p>
            <p>Số lượng: <?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?></p>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p class="alert alert-warning text-center">Giỏ hàng của bạn đang trống.</p>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="/projectbanhang/Product" class="btn btn-secondary">Tiếp tục mua sắm</a>
        <a href="/projectbanhang/Product/checkout" class="btn btn-primary">Thanh Toán</a>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
