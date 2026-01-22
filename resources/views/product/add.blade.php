<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>

</head>
<body>
<div class="container">
    <h1>Thêm Sản Phẩm</h1>

    <form>
        <div class="form-group">
            <label for="name">Tên Sản Phẩm</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <div class="button-group">
            <a class="button">Thêm</a>
            <a href="/product" class="btn-cancel">Hủy</a>
        </div>
    </form>
</div>
</body>
</html>
