<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<h1>Meals List</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Cooking Time</th>
        <th>Difficulty</th>
    </tr>
    <?php foreach ($meals as $meal) : ?>
        <tr>
            <td><?= $meal['name'] ?></td>
            <td><?= $meal['cookingTime'] ?></td>
            <td><?= $meal['difficulty'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require "partials/footer.php" ?>
