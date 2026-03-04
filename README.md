## 🚀 Báo cáo Thực hành Laravel - Lab 6 & 7

**Sinh viên thực hiện:** Tiêu Trung Kiên
**Mã sinh viên:** 23810310129 

---

## 📖 Mô tả dự án
Dự án này là bài thực hành các kiến thức nền tảng về Framework Laravel. Dự án tập trung vào việc thử tạo Controller, truyền dữ liệu ra View, sử dụng vòng lặp Blade và đặc biệt là áp dụng Master Layout.

**Các kỹ năng được áp dụng:**
* Khởi tạo và điều hướng với **Controllers** (`HomeController`, `ProductController`).
* Xử lý dữ liệu và truyền biến từ Controller sang View (`compact()`).
* Cú pháp **Blade Template Engine** (`@if`, `@foreach`, `@for`, toán tử 3 ngôi).
* Xây dựng giao diện dùng chung **Master Layout** (`@extends`, `@section`, `@yield`).
* Tích hợp thư viện **Bootstrap 5** để làm đẹp giao diện trang web.

## 🔗 Các chức năng và Routes chính
* `GET /` : Trang Welcome, hiển thị lời chào và thông tin cá nhân.
* `GET /products` : Hiển thị danh sách sản phẩm dạng bảng. Tự động highlight đỏ và gắn mác "(Vip)" cho các sản phẩm có giá trị cao.
* `GET /home` & `GET /contact` : Các trang tĩnh kế thừa giao diện Header và Footer từ Master Layout.
* `GET /bang-cuu-chuong/{n}` : Ứng dụng in bảng cửu chương động có xử lý lỗi.
