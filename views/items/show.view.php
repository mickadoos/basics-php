<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<h1><?= $heading ?></h1>
<table class="table__items">
    <tr class="table__items-head">
        <?php if (!empty($item)) : ?>
            <?php foreach (array_keys($item) as $header) : ?>
                <th class="table__items-header"><?= strToHeading($header) ?></th>
            <?php endforeach; ?>
            <th class="table__items-header">Link</th>
        <?php endif; ?>
    </tr>
    <tr class="table__items-row">
        <?php foreach ($item as $value) : ?>
            <td class="table__items-data"><?= htmlspecialchars($value) ?></td>
        <?php endforeach; ?>
        <td class="table__items-data"><a href=<?= "/{$tableName}" ?>>Go back</a></td>
    </tr>
</table>

<?php require "partials/footer.php" ?>
