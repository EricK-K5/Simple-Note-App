# Simple Notes App

Ứng dụng mẫu quản lý ghi chú (PHP + MySQL) đơn giản, có đăng ký/đăng nhập, CRUD cho ghi chú.

Hướng dẫn nhanh:

1. Tạo cơ sở dữ liệu và bảng bằng cách chạy file SQL:
   - Mở MySQL client hoặc phpMyAdmin, chạy `database/schema.sql`.

2. Cấu hình kết nối DB:
   - Mở `config/db.php`, sửa các biến `$DB_HOST`, `$DB_NAME`, `$DB_USER`, `$DB_PASS` cho phù hợp.

3. Chạy ứng dụng bằng PHP built-in server (cho môi trường phát triển):

```bash
php -S localhost:8000
```

4. Truy cập: `http://localhost:8000/`

Ghi chú về mã nguồn:

- `controllers/`: chứa logic xử lý request (đã có chú thích tiếng Việt ở mỗi hàm).
- `models/`: lớp tương tác DB (User, Note, Category) — có ví dụ sử dụng PDO.
- `middleware/auth.php`: helper quản lý session và lấy user hiện tại.
- `views/`: các trang HTML/PHP đơn giản, có header/footer chung.

Mọi thay đổi đều được chú thích ngắn để người đọc dễ hiểu.
