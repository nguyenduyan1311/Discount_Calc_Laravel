<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Calculate Discount</h1>
<form action="/display-discount" method="post">
    @csrf
    <input type="number" name="price" placeholder="Giá niêm yết">
    <input type="number" name="discountPercent" placeholder="Tỉ lệ chiết khấu">
    <input type="text" name="productDescription" placeholder="Mô tả">
    <button type="submit">Calculate</button>
</form>
</body>
</html>
