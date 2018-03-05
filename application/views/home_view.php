<p class="bg-success">
    <?php if($this->session->flashdata('login_success')):?>
    <?php echo $this->session->flashdata('login_success');?>
    <?php endif;?>
    <?php if($this->session->flashdata('user_registered')):?>
        <?php echo $this->session->flashdata('user_registered');?>
    <?php endif;?>
</p>
<p class="bg-danger">
    <?php if($this->session->flashdata('login_failed')):?>
    <?php echo $this->session->flashdata('login_failed');?>
    <?php endif;?>
    <?php if($this->session->flashdata('no_access')):?>
        <?php echo $this->session->flashdata('no_access');?>
    <?php endif;?>
</p>
<?php if(isset($projects)) { ?>
<h1>Projects</h1>
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
            <td><?= $project->project_name; ?></td>
            <td><?= $project->project_body; ?></td>
            <td><a href="<?= base_url(); ?>projects">View</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<?php } else { ?>
    <div class="jumbotron">
        <h2 class="text-center">Welcome to the CI App</h2>
    </div>
<?php } ?>
