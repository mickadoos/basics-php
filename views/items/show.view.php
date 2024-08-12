<h1><?= $heading ?></h1>
<table class="table__items">
    <tr class="table__items-head">
        <?php if (!empty($item)) : ?>
            <?php foreach (array_keys($item) as $header) : ?>
                <th class="table__items-header"><?= strToHeading($header) ?></th>
            <?php endforeach; ?>
            <th class="table__items-header">Link</th>
            <th class="table__items-header">Edit</th>
        <?php endif; ?>
    </tr>
    <tr class="table__items-row">
        <?php foreach ($item as $value) : ?>
            <td class="table__items-data"><?= htmlspecialchars($value) ?></td>
        <?php endforeach; ?>
        <td class="table__items-data"><a href=<?= "/{$tableName}" ?>>Go back</a></td>
        <td class="table__items-data">
            <a id="btn-edit" href="/note/edit?id=<?= $item['id'] ?>">Edit Note</a>
        </td>
    </tr>
</table>