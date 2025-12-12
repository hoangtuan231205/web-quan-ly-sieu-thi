<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>MVC Mini Laravel</title>

    <!-- Nhúng CSS từ thư mục public -->
    <link rel="stylesheet" href="/mvcdaydu/public/layout.css">
</head>

<body>

<nav class="navbar">
    <a href="/mvcdaydu/public/" class="nav-link">Trang chủ</a>
    <a href="/mvcdaydu/public/products" class="nav-link">Sản phẩm</a>
</nav>

<div class="container">
    <?php echo $content ?? ''; ?>
</div>

</body>
</html>
