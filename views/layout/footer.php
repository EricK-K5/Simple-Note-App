<?php
// Footer chung, đóng các thẻ HTML
?>
</main>
<footer class="app-footer">
	<div class="footer-shell">
		<div class="footer-grid">
			<div>
				<h3 class="footer-heading">Simple Notes App</h3>
				<p class="footer-copy">Một không gian nhỏ gọn để ghi chú, theo dõi ý tưởng và quay lại công việc dang dở nhanh hơn.</p>
			</div>
			<div>
				<h4 class="footer-heading">Lối tắt</h4>
				<div class="footer-links">
					<a class="footer-link" href="?page=notes_list">Danh sách ghi chú</a>
					<a class="footer-link" href="?page=notes_create">Tạo ghi chú mới</a>
					<a class="footer-link" href="?page=register">Tạo tài khoản</a>
				</div>
			</div>
			<div>
				<h4 class="footer-heading">Điểm mạnh</h4>
				<div class="footer-badges">
					<span class="footer-badge">Nhanh</span>
					<span class="footer-badge">Gọn</span>
					<span class="footer-badge">Dễ dùng</span>
				</div>
			</div>
			<div>
				<h4 class="footer-heading">Ghi chú</h4>
				<p class="footer-copy">Dữ liệu được quản lý trực tiếp trên hệ thống hiện tại, phù hợp cho sử dụng nội bộ và thử nghiệm.</p>
			</div>
		</div>
		<div class="footer-bottom">
			<p class="footer-copy">&copy; <?= date('Y') ?> Simple Notes App</p>
			<p class="footer-copy">Built for quick capture and clear focus.</p>
		</div>
	</div>
		<div class="footer-grid">
			<div>
				<h3 class="footer-heading">Simple Notes App</h3>
				<p class="footer-copy">Một không gian nhỏ gọn để ghi chú, theo dõi ý tưởng và quay lại công việc dang dở nhanh hơn.</p>
			</div>
			<div>
				<h4 class="footer-heading">Lối tắt</h4>
				<div class="footer-links">
					<a class="footer-link" href="?page=notes_list">Danh sách ghi chú</a>
					<a class="footer-link" href="?page=notes_create">Tạo ghi chú mới</a>
					<a class="footer-link" href="?page=register">Tạo tài khoản</a>
				</div>
			</div>
			<div>
				<h4 class="footer-heading">Điểm mạnh</h4>
				<div class="footer-badges">
					<span class="footer-badge">Nhanh</span>
					<span class="footer-badge">Gọn</span>
					<span class="footer-badge">Dễ dùng</span>
				</div>
			</div>
			<div>
				<h4 class="footer-heading">Ghi chú</h4>
				<p class="footer-copy">Dữ liệu được quản lý trực tiếp trên hệ thống hiện tại, phù hợp cho sử dụng nội bộ và thử nghiệm.</p>
			</div>
		</div>
		<div class="footer-bottom">
			<p class="footer-copy">&copy; <?= date('Y') ?> Simple Notes App</p>
			<p class="footer-copy">Built for quick capture and clear focus.</p>
		</div>
	</div>
</footer>
	<script src="<?= htmlspecialchars((BASE_URL ?: '') . '/public/js/app.js') ?>" defer></script>
</body>
</html>

