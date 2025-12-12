<?php ob_start(); ?>

<h1>Chào mừng đến với MVC Mini Laravel ❤️</h1>

<p class="intro">
    Đây là phiên bản framework mini do em thiết kế cho anh.  
    Nó sử dụng mô hình MVC giống hệt Laravel:
</p>

<ul class="features">
    <li>✔ Router giống Laravel</li>
    <li>✔ Controller – Model – View tách riêng</li>
    <li>✔ Autoload class tự động</li>
    <li>✔ URL đẹp nhờ .htaccess</li>
    <li>✔ Cấu trúc y hệt framework chuyên nghiệp</li>
</ul>

<p class="tip">
    Bấm vào menu bên trên để xem phần Sản phẩm nhé 💛
</p>

<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/layout.php'; ?>
