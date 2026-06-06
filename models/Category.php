<?php
// Model `Category` đơn giản để quản lý danh mục (tùy chọn)
require_once __DIR__ . '/../config/db.php';

class Category
{
	// Lấy tất cả danh mục (có thể mở rộng theo user)
	public static function all()
	{
		global $pdo;
		$stmt = $pdo->query('SELECT * FROM categories ORDER BY name');
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// Tìm danh mục theo id
	public static function find($id)
	{
		global $pdo;
		$stmt = $pdo->prepare('SELECT * FROM categories WHERE id = :id LIMIT 1');
		$stmt->execute(['id' => $id]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	// Tạo danh mục mới
	public static function create($name, $user_id = null)
	{
		global $pdo;
		$stmt = $pdo->prepare('INSERT INTO categories (name, user_id) VALUES (:name, :user_id)');
		return $stmt->execute(['name' => $name, 'user_id' => $user_id]);
	}
}

