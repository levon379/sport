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


    <div class="container">
    <a href="http://sport.dev/index.php/user/logout" class="btn btn-info">Log out</a>
    <h1 >Photo
        <a href="http://sport.dev/index.php/admin/photo/create_photo" class="btn btn-primary btn-xs" >
            <span class="glyphicon glyphicon-plus" aria-hidden="true"/>
        <a/>
    </h1>
        <div class="table">
            <table class="table table-bordered table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($photo as $items): ?>
                            <tr>

                                <td> <img src="<?php echo '/../public/uploads/photo/'. $items['file_name']; ?>" vidth="50" height="50"  alt="img" /></td>
                                <td>
                                    <a title="View News" class="btn btn-success btn-xs" href="<?= base_url().'/admin/photo/admin_photo_show/'.$items['id']; ?>">
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>
                                    <a/>
                                    <a title="Edit News" class="edit_photo btn btn-primary btn-xs" href="http://sport.dev/admin/photo/edit_photo/<?= $items['id']; ?>">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                                    <a/>
                                    <a title="Delete News" class="delete_photo btn btn-danger btn-xs" data="<?= $items['id']; ?>" href="http://sport.dev/admin/photo/delete_photo/<?= $items['id']; ?>">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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
        </div>
    </div>
    <script type="text/javascript" src="http://sport.dev/public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://sport.dev/public/js/jquery.js"></script>
</body>

</html>