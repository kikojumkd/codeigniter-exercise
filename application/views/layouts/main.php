<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

        <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo base_url() ?>">Ci App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>users/register">Register</a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php $this->load->view('users/login_view') ?>
                </div>
                <div class="col-md-9">
                    <?php $this->load->view($main_view); ?>
                </div>
            </div>
        </div>
    </body>
</html>