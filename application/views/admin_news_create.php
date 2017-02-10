<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(($this->session->userdata('is_client_login')==false))
{
    redirect('/user/login', 'location');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://sport.dev/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://sport.dev/public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="http://sport.dev/public/css/style.css">
    <script type="text/javascript" src="http://sport.dev/public/bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Admin</title>

</head>
<body>



<div class="container">
    <div class="row">
        <div class="col-lg-1 col-lg-offset-10 col-md-1 col-md-offset-10 col-sm-1  col-sm-offset-10 col-xs-1 col-xs-offset-10">
            <a href="http://sport.dev/index.php/user/logout" class="btn btn-info">Log out</a>
        </div>
    </div>

    <h2 class="text-center">Create News</h2>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6  col-sm-offset-3 col-xs-6 col-xs-offset-4">
            <form method="post" id="form_news" action="http://sport.dev/index.php/admin/adminnews/add_news" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title:</label>
                    <input type="text" class="form-control " id="title" name="title">
                </div>
                <div class="form-group">
                    <input type="file" name="file"/>
                </div>
                <div class="form-group">
                    <label for="comment">Description:</label>
                    <textarea class="form-control" rows="5" id="text" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Save</button>
            </form>
        </div>
    </div>


</div>
<script type="text/javascript" src="http://sport.dev/public/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://sport.dev/public/js/jquery.js"></script>
</body>

</html>