<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<h1>To Do List</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Time</th>
        <th>Priority</th>
    </tr>
    <?php foreach ($tasks as $task) : ?>
        <tr>
            <td><?= $task['title'] ?></td>
            <td><?= $task['time'] ?></td>
            <td><?= $task['priority'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require "partials/footer.php" ?>
