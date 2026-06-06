<?php
// Hiển thị chi tiết danh mục (template đơn giản)
require_once __DIR__ . '/../layout/header.php';
?>
<h2>Chi tiết danh mục</h2>
<?php if (empty($category)): ?>
	<p>Danh mục không tồn tại.</p>
<?php else: ?>
	<h3><?= htmlspecialchars($category['name']) ?></h3>
	<p>ID: <?= $category['id'] ?></p>
<?php endif; ?>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>

