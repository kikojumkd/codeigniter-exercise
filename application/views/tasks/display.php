<h1>Task Display View</h1>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Project Name</th>
        <th>Project Description</th>
        <th>Date Created</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $task->task_name ?></td>
            <td><?= $task->task_body ?></td>
            <td><?= $task->date_created ?></td>
        </tr>
    </tbody>
</table>
