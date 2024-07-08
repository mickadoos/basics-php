<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>

<h1>To Do List</h1>
<table>
    <tr>
        <th><button onclick="f()">Name</button></th>
        <th>Time</th>
        <th>Priority</th>
        <th>Deadline</th>
    </tr>
    <?php foreach ($tasks as $task) : ?>
        <tr>
            <td><?= $task['name'] ?></td>
            <td><?= $task['time'] ?></td>
            <td><?= $task['priority'] ?></td>
            <td><?= $task['deadline'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require "partials/footer.php" ?>
