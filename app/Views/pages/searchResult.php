<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/image/Screenshot%202024-07-02%2008365019.png'); /* Ganti sesuai path gambar */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="text-white">
    <div class="min-h-screen flex flex-col items-center justify-center bg-opacity-80 bg-gray-900 text-white">
        <div class="container mx-auto p-5 bg-white bg-opacity-90 rounded-lg shadow-md text-black">
            <h1 class="text-3xl font-bold mb-5">Search Results</h1>

            <?php if (!empty($hotels) && is_array($hotels)) : ?>
                <ul class="list-disc pl-5">
                    <?php foreach ($hotels as $hotel) : ?>
                        <li class="mb-4">
                            <h2 class="text-2xl font-semibold">
                                <?= esc($hotel['name']) ?>
                            </h2>
                            <p>Location: <?= isset($hotel['address']) && $hotel['address'] ? esc($hotel['address']) : 'Address not specified' ?></p>
                            <p>Price: <?= esc($hotel['price']) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!-- Debugging for the $hotels variable in the framework -->
                <!-- <?= dd($hotels); ?> -->
            <?php else : ?>
                <p>No hotels found.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
