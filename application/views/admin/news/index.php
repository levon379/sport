<?php
//require_once '..//header.php';
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
    <?php if($this->session->flashdata('success')){ ?>
       <div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Success! </strong>
    Product have added to your list.
</div>
    <?php  } ?>
     <?php if($this->session->flashdata('delete_error_message')){ ?>
       <div class="alert alert-danger" id="alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button> 
    <strong>Success! </strong>
    Product not have added to your list. Try again
</div>
    <?php  } ?>
    <?php echo validation_errors(); ?>


    <h2 class="text-center">Our News</h2>
    <div class="container">
        <div class="row">
        <div class="col-lg-1 col-lg-offset-10 col-md-1 col-md-offset-10 col-sm-1  col-sm-offset-10 col-xs-1 col-xs-offset-10">
    <a href="http://sport.dev/index.php/user/logout" class="btn btn-info">Log out</a>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10  col-sm-offset-1 col-xs-10 col-xs-offset-1">

                <a href="http://sport.dev/index.php/admin/news/create_news" class="add_news btn btn-primary" >
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"/>
                <a/>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created_date</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($news as $items): ?>
                            <tr>
                                <td > <img src="/img/image1.jpeg"   alt="img" /></td>
                                <td class="title" ><?= $items['title']; ?></td>
                                <td scope="row"><?= $items['description']; ?></td>
                                <td scope="row"><?= $items['created_date']; ?></td>
                                <td >
                                    <a  class="btn btn-primary" href="<?= base_url().'index.php/admin/news/admin_news_show/'.$items['id']; ?>">
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>
                                    <a/>
                                </td>
                                <td >
                                    <a  class="edit_news btn btn-success" href="http://sport.dev/index.php/admin/news/edit_news/<?= $items['id']; ?>">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                                    <a/>
                                </td>
                                <td >
                                    <a class="delete_news btn btn-danger" data="<?= $items['id']; ?>" href="http://sport.dev/index.php/admin/news/delete_news/<?= $items['id']; ?>">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    <a/>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                    <br />

    <div class=" pagination">
            <?php echo $this->pagination->create_links();  ?>

    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://sport.dev/public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://sport.dev/public/js/jquery.js"></script>
</body>

</html>