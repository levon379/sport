<?php
//require_once '../header.php';
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


    <div class="container">
    <a href="http://sport.dev/user/logout" class="btn btn-info">Log out</a>

        <h1>Our News <a href="http://sport.dev/admin/news/create_news" class="btn btn-primary btn-xs" title="Add New News"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></h1>
<div class="table">
                <table class="table table-bordered table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created_date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($news as $items): ?>
                            <tr>
                                <td ><img src="<?php echo '/../public/uploads/photo/'. $items['file_name']; ?>" vidth="50" height="50"/></td>
                                <td class="title" ><?= $items['title']; ?></td>
                                <td scope="row"><?= $items['description']; ?></td>
                                <td scope="row"><?= $items['created_date']; ?></td>
                                <td width="100">
                                    <a title="View News" class="btn btn-success btn-xs" href="<?= base_url().'admin/news/admin_news_show/'.$items['id']; ?>">
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>
                                    <a/>
                                    <a  title="Edit News" class="edit_news btn btn-primary btn-xs" href="http://sport.dev/admin/news/edit_news/<?= $items['id']; ?>">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                                    <a/>
                                    <a title="Delete News" class="delete_news btn btn-danger btn-xs" data="<?= $items['id']; ?>" href="http://sport.dev/admin/news/delete_news/<?= $items['id']; ?>">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Role"></span>
                                    <a/>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
                    <br />

    <div class=" pagination">
            <?php echo $this->pagination->create_links();  ?>

    </div>

    </div>
    <script type="text/javascript" src="http://sport.dev/public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://sport.dev/public/js/jquery.js"></script>
</body>

</html>