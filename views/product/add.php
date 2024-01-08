<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Thêm Sản Phẩm</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Thêm Sản Phẩm</h2>
    <form>
        <div class="mb-3">
            <label for="tenSanPham" class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="tenSanPham" placeholder="Nhập tên sản phẩm">
        </div>

        <div class="mb-3">
            <label for="gia" class="form-label">Giá</label>
            <input type="number" class="form-control" id="gia" placeholder="Nhập giá sản phẩm">
        </div>

        <div class="mb-3">
            <label for="hinhAnh" class="form-label">Hình Ảnh</label>
            <input type="file" class="form-control" id="hinhAnh">
        </div>

        <div class="mb-3">
            <label for="danhMuc" class="form-label">Danh Mục</label>
            <select class="form-select" id="danhMuc">
                <option value="danhMuc1">Danh Mục 1</option>
                <option value="danhMuc2">Danh Mục 2</option>
                <option value="danhMuc3">Danh Mục 3</option>
                <!-- Thêm các danh mục khác tùy thuộc vào nhu cầu của bạn -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
