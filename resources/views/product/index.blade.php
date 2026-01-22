<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>

</head>
<body>
<div class="container">
    <h1>Danh Sách Sản Phẩm</h1>

    <div class="btn-group">
        <a href="{{ route('add') }}" class="btn-add">Thêm Sản Phẩm</a>
    </div>

    <table>
        <thead>
        <tr>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Thao Tác</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Laptop</td>
            <td class="price">123</td>
            <td class="actions">
                <a href="product/1">Xem</a>
            </td>
        </tr>
        <tr>
            <td>iPhone</td>
            <td class="price">123</td>
            <td class="actions">
                <a href="product/2">Xem</a>
            </td>
        </tr>
        <tr>
            <td>tai nghe</td>
            <td class="price">123</td>
            <td class="actions">
                <a href="product/3">Xem</a>
            </td>
        </tr>
        <tr>
            <td>MacBook</td>
            <td class="price">123</td>
            <td class="actions">
                <a href="product/4">Xem</a>
            </td>
        </tr>
        <tr>
            <td>iPad</td>
            <td class="price">123</td>
            <td class="actions">
                <a href="product/5">Xem</a>
            </td>
        </tr>

        </tbody>
    </table>
</div>
</body>
</html>
