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


    <h2 class="text-center"></h2>
    <div class="container">
        <a href="http://sport.dev/index.php/user/logout" class="btn btn-info">Log out</a>

        <h1>Video <a href="http://sport.dev/index.php/admin/video/create_video" class="btn btn-primary btn-xs" >
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"/>
                  <a/>
        </h1>
        <table class="table table-bordered table-striped table-hover" >
            <thead>
            <tr>
                <th>Url</th>
                <th>Actions</th>
            </tr>
            </thead>

                    <tbody>
                        <?php foreach ($video as $items): ?>
                            <tr>

                                <td scope="row"><?= $items['url']; ?></td>
                                <td >
                                    <a  title="View Video" class="btn btn-success btn-xs"  href="<?= base_url().'admin/video/admin_video_show/'.$items['id']; ?>">
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>
                                    <a/>
                                    <a title="Edit Video" class="btn btn-primary btn-xs" href="http://sport.dev/admin/video/edit_video/<?= $items['id']; ?>">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                                    <a/>
                                    <a title="Delete Video" class="btn btn-danger btn-xs" data="<?= $items['id']; ?>" href="http://sport.dev/admin/video/delete_video/<?= $items['id']; ?>">
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