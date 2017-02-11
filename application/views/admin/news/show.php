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
    <title>School</title>


</head>
<body>



<div class="container">

    <h1>News show</h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
            <tr><th> Photo </th><td> <img src="../../public/img/<?=$news_show[0]['file_name']; ?>" > </td></tr>
            <tr><th> Title </th><td> <?=$news_show[0]['title']; ?> </td></tr>
            <tr><th> Description </th><td> <?=$news_show[0]['description']; ?></td></tr>
            </tbody>
        </table>
    </div>

</div>






<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>