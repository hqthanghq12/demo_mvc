<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bảng Sản Phẩm</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Danh sách Sản Phẩm</h2>

    <!-- Nút Thêm -->
    <a href="path/to/your/form-page.html" class="btn btn-primary mb-3">Thêm</a>

    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Thao Tác</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Sản phẩm 1</td>
            <td>100.00</td>
            <td><img src="../../public/image/anh1.png" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;"></td>
            <td>Máy Tính</td>
            <td><button type="button" class="btn btn-warning">Sửa</button><button type="button" class="btn btn-danger">Xóa</button></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Sản phẩm 1</td>
            <td>100.00</td>
            <td><img src="../../public/image/anh4.png" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;"></td>
            <td>Điện Thoại</td>
            <td><button type="button" class="btn btn-warning">Sửa</button><button type="button" class="btn btn-danger">Xóa</button></td>

        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Sản phẩm 1</td>
            <td>100.00</td>
            <td><img src="../../public/image/anh1.png" alt="Hình ảnh sản phẩm 1" style="max-width: 100px;"></td>
            <td>Máy Tính</td>
            <td><button type="button" class="btn btn-warning">Sửa</button><button type="button" class="btn btn-danger">Xóa</button></td>

        </tr>
        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>

<!-- Bao gồm Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
