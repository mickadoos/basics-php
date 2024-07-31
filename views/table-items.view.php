<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<h1><?= $heading ?></h1>
<table class="table__items">
    <tr class="table__items-head">
        <?php if (!empty($items)) : ?>
            <?php foreach (array_keys($items[0]) as $header) : ?>
                <th class="table__items-header"><?= strToHeading($header) ?></th>
            <?php endforeach; ?>
            <th class="table__items-header">Link</th>
        <?php endif; ?>
    </tr>
    <?php foreach ($items as $item) : ?>
        <tr class="table__items-row" data-id="<?= $item['id'] ?>">
            <?php foreach ($item as $key) : ?>
                <td class="table__items-data"><?= htmlspecialchars($key) ?></td>
            <?php endforeach; ?>
            <td class="table__items-data"><a href=<?="/{$tableKey}?id={$item['id']}"?>>More</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require "partials/footer.php" ?>
