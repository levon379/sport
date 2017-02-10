<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
<!--info@mpsit.am-->
<!--590075-->
</head>
<body>
    <?php if($this->session->flashdata('success')){ ?>
       <div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Success! </strong>
    Product have added to your wishlist.
</div>
    <?php  } ?>
     <?php if($this->session->flashdata('delete_error_message')){ ?>
       <div class="alert alert-danger" id="alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button> 
    <strong>Success! </strong>
    Product not have added to your wishlist. Try again
</div>
    <?php  } ?>
    <?php echo validation_errors(); ?>


    <h2 class="text-center">News</h2>
    <div class="container">
        <div class="row">
        <div class="col-lg-1 col-lg-offset-10 col-md-1 col-md-offset-10 col-sm-1  col-sm-offset-10 col-xs-1 col-xs-offset-10">
    <a href="http://sport.dev/index.php/user/logout" class="btn btn-info">Log out</a>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
    <form method="post" id="form_news" action="http://sport.dev/index.php/admin/adminnews/add_news_about" hidden enctype="multipart/form-data" >
        <input type="hidden" id="id" name="id"  >
        <div class="form-group">
            <label for="exampleInputEmail1" >Title:</label>
            <input type="text" class="form-control "  id="title" name="title">
        </div>
            <input type="text" class="form-control "   id="datetimepicker4" name="created_date">
      <div class="form-group">
           <input type="file"  name="file"/>
<!--           <img src="/img/image1.jpeg"   alt="img" style="max-width:140px;max-height:140px; " class="img-rounded img-rounded" id="img">-->
        </div>
  
        <div class="form-group">
            <label for="comment">Description:</label>
            <textarea class="form-control" rows="5" id="text" name="description"></textarea>
        </div>



        <button type="submit" class="btn btn-default">Save</button>
    </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10  col-sm-offset-1 col-xs-10 col-xs-offset-1">

                <a href="javascript:void();" class="add_news btn btn-primary" > Add <a/>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th> created_date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($news_cat as $items): ?>
                            <tr>
                                <td > <img src="/img/image1.jpeg"   alt="img" /></td>
                                <td class="title" >  <a href="<?= base_url() . 'index.php/admin/adminnews/admin_news_about/' . $items['id']; ?>" ><?= $items['title']; ?></a> </a></td>
                                <td scope="row"><?= $items['description']; ?></td>
                                <td scope="row"><?= $items['created_date']; ?></td>
                                <td >
                                    <a  class="edit_news btn btn-success" 
                                        data_id="<?= $items['id']; ?>" data_text="<?= $items['description']; ?>"
                                        data_date="<?= $items['created_date']; ?>" data_title="<?= $items['title']; ?>" data_img="<?= $items['image']; ?>"
                                         href="javascript:void();">edit<a/>
                                </td>
                                <td ><a class="delete_news btn btn-danger" data="<?= $items['id']; ?>" href="delete_news_about/<?= $items['id']; ?>">delete   <a/></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                    <br />
    <div class="clear pagination">
        
            <?php echo $this->pagination->create_links();  ?>
          
    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://sport.dev/public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://sport.dev/public/js/jquery.js"></script>
</body>

</html>