<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<h1><?= $heading?></h1>
<table>
    <tr>
        <?php if (!empty($items)) : ?>
            <?php foreach (array_keys($items[0]) as $header) : ?>
                <th><?= ucfirst($header) ?></th>
            <?php endforeach; ?>
        <?php endif; ?>
    </tr>
    <?php foreach ($items as $item) : ?>
        <tr>
            <?php foreach ($item as $category) : ?>
                <td><?= $category ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

<?php require "partials/footer.php" ?>
