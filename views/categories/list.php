<?php
// Hiển thị danh sách danh mục (template đơn giản)
require_once __DIR__ . '/../layout/header.php';
?>
<h2>Danh sách danh mục</h2>
<?php if (empty($categories)): ?>
	<p>Chưa có danh mục nào.</p>
<?php else: ?>
	<ul>
	<?php foreach ($categories as $c): ?>
		<li>
			<a href="?page=categories_detail&id=<?= $c['id'] ?>"><?= htmlspecialchars($c['name']) ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>

