<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <!-- Card -->
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Đăng Ký Tài Khoản</h3>
                </div>
                <div class="card-body">
                    <!-- Hiển thị lỗi -->
                    <?php if (isset($errors)): ?>
                    <ul class="text-danger">
                        <?php foreach ($errors as $err): ?>
                        <li><?php echo htmlspecialchars($err, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                    <!-- Form -->
                    <form class="user" action="/projectbanhang/account/save" method="post">
                        <!-- Username & Fullname -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Tên đăng nhập" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                    placeholder="Họ và Tên" required>
                            </div>
                        </div>

                        <!-- Password & Confirm Password -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Mật khẩu" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                                    placeholder="Xác nhận mật khẩu" required>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-block">
                                Đăng Ký
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>