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
    <title>News</title>


</head>
<body>
<div class="container-fluid">
    <h1 class="text-center title-school-page"> <?=$news_show[0]['title']; ?></h1>
    <h1 class="text-center title-school-page"> <?=$news_show[0]['created_date']; ?></h1>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-1 col-sm-8  col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <img src="../../public/img/<?=$news_show[0]['file_name']; ?>" width="150" height="150" >
        </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

    </div>
    </div>
    <div class="row description-school-page">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-1 col-sm-8  col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <pre> <?=$news_show[0]['description']; ?>
            </pre>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

        </div>
    </div>
</div>

<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>