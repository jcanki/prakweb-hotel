<div class="w-screen min-h-screen flex items-center justify-center">
    <div class="max-w-3xl mx-auto bg-white p-8 shadow-md rounded">
        <form action="/searchResults.php" method="GET" class="flex items-center">
            <input type="text" name="search" class="flex-1 border border-gray-300 px-4 py-2 rounded mr-2" placeholder="Search hotel">
            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-700/80">Search</button>
        </form>

        <table class="mt-8 w-full table-auto border border-gray-200">
            <thead>
                <tr class="bg-green-100 text-green-800 text-white px-4 py-2 rounded hover:bg-green-700/80">
                    <th class="border border-gray-200 px-4 py-2">Name</th>
                    <th class="border border-gray-200 px-4 py-2">Address</th>
                    <th class="border border-gray-200 px-4 py-2">City</th>
                    <th class="border border-gray-200 px-4 py-2">Price</th>
                    <th class="border border-gray-200 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel): ?>
                <tr>
                    <td class="border border-gray-200 px-4 py-2"><?= $hotel['name'] ?></td>
                    <td class="border border-gray-200 px-4 py-2"><?= $hotel['address'] ?></td>
                    <td class="border border-gray-200 px-4 py-2"><?= $hotel['city'] ?></td>
                    <td class="border border-gray-200 px-4 py-2"><?= $hotel['price'] ?></td>
                    <td class="border border-gray-200 px-4 py-2">
                        <a href="/edit.php?id=<?= $hotel['id'] ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Edit</a>
                        <a href="/delete.php?id=<?= $hotel['id'] ?>" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
