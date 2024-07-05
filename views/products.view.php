<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<h1>Products List</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
    </tr>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['category'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require "partials/footer.php" ?>