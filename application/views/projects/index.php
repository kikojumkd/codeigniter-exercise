<h1>Projects</h1>
<p class="bg-success">
    <?php if($this->session->flashdata('project_created')):?>
        <?php echo $this->session->flashdata('project_created');?>
    <?php endif;?>
    <?php if($this->session->flashdata('project_updated')):?>
        <?php echo $this->session->flashdata('project_updated');?>
    <?php endif;?>
    <?php if($this->session->flashdata('project_deleted')):?>
        <?php echo $this->session->flashdata('project_deleted');?>
    <?php endif;?>
</p>
<p class="text-right"><a class="btn btn-primary" href="<?= base_url(); ?>projects/create">Create Project</a></p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Project Name</th>
            <th colspan="2">Project Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($projects as $project): ?>
        <tr>
            <?php echo "<td><a href='". base_url() ."/projects/display/" . $project->id . "'>" . $project->project_name . "</a></td>"; ?>
            <?php echo "<td>" . $project->project_body . "</td>"; ?>
            <td><a class="btn btn-danger" href="<?= base_url(); ?>/projects/delete/<?= $project->id; ?>"><i class="fas fa-times"></i></a></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>