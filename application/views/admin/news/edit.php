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
<style>

    body {
        font-family: 'Lato';
    }

</style>
<body>


<div class="container">
            <a href="http://sport.dev/user/logout" class="btn btn-info">Log out</a>
    <h1>Edit News</h1>
    <hr>
            <form method="post" class="form-horizontal" id="form_news" action="http://sport.dev/admin/news/edit_news_save" enctype="multipart/form-data">
                <input type="hidden" value="<?=$news_show[0]['id']; ?>" name="id" >
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control " value="<?=$news_show[0]['title']; ?>" required="required" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Upload file</label>
                    <div class=" col-sm-6">
                        <img src="<?php echo '/../public/uploads/news/'. $news_show[0]['file_name']; ?>" vidth="50" height="50"  alt="img" />
                        <input type="file" name="file_name"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description:</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" cols="50" rows="10"  name="description"><?=$news_show[0]['description']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        <input class="btn btn-primary form-control" type="submit" value="Update">
                    </div>
                </div>

            </form>
    </div>


</div>
<script type="text/javascript" src="http://sport.dev/public/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://sport.dev/public/js/jquery.js"></script>
</body>

</html>