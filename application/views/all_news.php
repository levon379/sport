<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <script type="text/javascript" src="../../public/bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>All News</title>


</head>
<body>
<div class="container-fluid">
    <h1>Our News</h1>
        <div class="col-lg-9 col-lg-offset-1 col-md-9  col-md-offset-1  col-sm-9 col-sm-offset-2 col-sm-11 col-xs-11 col-xs-offset-1 " id="result">

            <?php
            if(isset($all_news)){
            foreach ($all_news as $items){ ?>

        <div class="col-xs-12 col-sm-6   col-md-4  col-lg-4 ">
            <div class="thumbnail">

                <img src="<?php echo '/../public/uploads/news/'. $items['file_name']; ?>" vidth="50" height="50">
                <div class="caption">
                    <h3><a href="#"><?=$items['title']; ?></a></h3>
                    <h6><a href="#"><?=$items['created_date']; ?></a></h6>
                    <p><?=substr($items['description'], 0, 300);?> ...</p>

                    <a href="<?= base_url().'welcome/get_news/'.$items['id']; ?>" class="btn btn-success">
                        View more...
                        <i class="fa fa-arrow-right"></i>
                    </a>


                </div>
            </div>
        </div>
       <?php }} ?>


        <div class="clear" > </div>
        <div class=" pagination">
            <?php echo $this->pagination->create_links();  ?>

        </div>

    </div>
</div>

<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>