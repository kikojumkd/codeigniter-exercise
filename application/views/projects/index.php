<h1>Projects</h1>

<table border="1">
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Project Body</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($projects as $project): ?>
        <tr>
            <?php echo "<td>" . $project->project_name . "</td>"; ?>
            <?php echo "<td>" . $project->project_body . "</td>"; ?>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>