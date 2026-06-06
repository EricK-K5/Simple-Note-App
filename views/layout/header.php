<?php
// Header chung cho các view: hiển thị menu và trạng thái người dùng
require_once __DIR__ . '/../../middleware/auth.php';
$currentUser = current_user();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simple Notes App</title>
	<base href="<?= htmlspecialchars((BASE_URL ?: '') . '/') ?>">
	<link rel="stylesheet" href="<?= htmlspecialchars((BASE_URL ?: '') . '/public/css/style.css') ?>">
</head>
<body>
<header>
	<h1>Simple Notes App</h1>
	<nav>
			<a class="secondary" href="?page=notes_list">Ghi chú</a>
			<a class="primary" href="?page=notes_create">+ Tạo mới</a>
		<?php if ($currentUser): ?>
				<span class="status-pill">Xin chào, <?= htmlspecialchars($currentUser['username']) ?></span>
				<a class="ghost" href="?page=logout">Đăng xuất</a>
		<?php else: ?>
				<a class="ghost" href="?page=login">Đăng nhập</a>
				<a class="ghost" href="?page=register">Đăng ký</a>
		<?php endif; ?>
	</nav>
	</div>
</header>
<main>

