<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Project Name: <?= $project_data->project_name; ?></h1>
            <p>Date Created: <?= $project_data->date_created; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h3>Description</h3>
            <p><?= $project_data->project_body; ?></p>
        </div>
        <div class="col-md-3 pull-right">
            <h3>Project Action</h3>
            <ul class="list-group">
                <li class="list-group-item"><a href="<?= base_url(); ?>tasks/create/<?= $project_data->id ?>">Create Task</a></li>
                <li class="list-group-item"><a href="<?= base_url(); ?>projects/edit/<?= $project_data->id; ?>">Edit Project</a></li>
                <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?= $project_data->id; ?>">Delete Project</a></li>
            </ul>
        </div>
    </div>
</div>