<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
    <!-- Memuat stylesheet Bootstrap versi 5.2.3 untuk styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Form untuk menambahkan data hotel -->
        <form action="/pages/store" method="post"> <!-- Data akan dikirim ke route 'pages/store' -->
            
            <!-- Input Nama Hotel -->
            <div class="form-group">
                <label for="name">Nama Hotel</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <!-- Input Kota -->
            <div class="form-group">
                <label for="city">Kota</label>
                <input type="text" name="city" class="form-control" required>
            </div>

            <!-- Input Harga -->
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <br>

            <!-- Tombol Submit untuk menyimpan data -->
            <button type="submit" class="btn btn-success">Tambah</button>

            <!-- Tombol Kembali ke halaman utama -->
            <a href="/" class="btn btn-secondary">Kembali</a>  
        </form>
    </div>
</body>
</html>
