<?php include 'layout.php'; ?>

<h1>Danh sách sản phẩm</h1>

<ul>
    <?php foreach ($products as $p): ?>
        <li>
            <?= $p['id'] ?> - <?= $p['name'] ?> - <?= number_format($p['price']) ?> VND
        </li>
    <?php endforeach; ?>
</ul>
