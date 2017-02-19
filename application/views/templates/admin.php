<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(($this->session->userdata('is_client_login')==false))
{
    redirect('/', 'location');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url().'public/bootstrap/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?= base_url().'public/css/style.css';?>">
    <meta charset="utf-8">
    <title><?= isset($title) ? $title : 'Admin area' ?></title>
    <style>

        body {
            font-family: 'Lato';
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?= base_url().'home';?>">
                    Home
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url().'admin/news';?>">News</a></li>
                    <li><a href="<?= base_url().'admin/page';?>">Page</a></li>
                    <li><a href="<?= base_url().'admin/photo';?>">Photo</a></li>
                    <li><a href="<?= base_url().'admin/video';?>">Video</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="<?= base_url().'user/logout';?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if($message = $this->session->flashdata('success')){ ?>
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Success! </strong>
            <?= $message ?>
        </div>
    <?php  } ?>
    <?php if($message = $this->session->flashdata('error_message')){ ?>
        <div class="alert alert-danger" id="alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>Error! </strong>
            <?= $message ?>
        </div>
    <?php  } ?>
    <div id="main-content">
        <div class="container">
            <?php echo $body; ?>
        </div>
    </div>

    <script type="text/javascript" src="<?= base_url().'public/bootstrap/js/jquery-1.11.3.min.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'public/bootstrap/js/bootstrap.min.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'public/js/script.js';?>"></script>
</body>
</html>