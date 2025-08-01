<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="/pages/store" method="post">
            <div class="form-group">
                <label for="name">Nama Hotel</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="city">Kota</label>
                <input type="text" name="city" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Tambah</button>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
