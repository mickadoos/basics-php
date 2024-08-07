<h1><?= $heading ?></h1>
<table class="table__items">
    <tr class="table__items-head">
        <?php if (!empty($item)) : ?>
            <?php foreach (array_keys($item) as $header) : ?>
                <th class="table__items-header"><?= strToHeading($header) ?></th>
            <?php endforeach; ?>
            <th class="table__items-header">Link</th>
            <th class="table__items-header">Delete</th>
        <?php endif; ?>
    </tr>
    <tr class="table__items-row">
        <?php foreach ($item as $value) : ?>
            <td class="table__items-data"><?= htmlspecialchars($value) ?></td>
        <?php endforeach; ?>
        <td class="table__items-data"><a href=<?= "/{$tableName}" ?>>Go back</a></td>
        <td class="table__items-data">
            <form method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                <button id="btn-delete">Delete</button>
            </form>
        </td>
    </tr>
</table>