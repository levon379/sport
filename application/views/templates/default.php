<!DOCTYPE html>
<html lang="en">
<head>
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
                <a class="navbar-brand" href="<?= base_url().'welcome';?>">
                    Home
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url().'news';?>">SCHOOL</a></li>
                    <li><a href="<?= base_url().'photo';?>">bio</a></li>
                    <li><a href="<?= base_url().'photo';?>">records</a></li>
                    <li><a href="<?= base_url().'photo';?>">news</a></li>
                    <li><a href="<?= base_url().'photo';?>">Photo</a></li>
                    <li><a href="<?= base_url().'video';?>">Video</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main-content">
        <?php echo $body; ?>
    </div>

    <script type="text/javascript" src="<?= base_url().'public/bootstrap/js/jquery-1.11.3.min.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'public/bootstrap/js/bootstrap.min.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'public/js/script.js';?>"></script>
</body>
</html>