<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script type="text/javascript" src="../public/bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Admin</title>


</head>
<body>
    <h2>Categories</h2>
    <form method="post" id="form" action="" hidden >
        <input type="hidden" id="id" name="id"  >
        <div class="form-group">
            <label for="exampleInputEmail1" ></label>
            <input type="text" class="form-control"  id="name" name="name">
        </div>
        <button type="submit" class="btn btn-default">Save</button>
    </form>

    <table class="table table-hover" >
        <thead>
            <tr>
                <th>Photo</th>
                <th>Title</th>
                <th>Description</th>
                <th> Add</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($category as $item): ?>
                <tr>
                    <td class="name" > <img src="" alt=""> </td>
                    <th scope="row"><?= $item['title']; ?></th>
                    <td class="name" > <?= $item['description']; ?> </a></td>

                    <td ><a href="javascript:void();" class="add btn btn-primary" > Add <a/></td>
                    <td ><a  class="edit btn btn-success" data="<?= $item['id']; ?>" href="javascript:void();">edit<a/></td>
                    <td ><a class="delete btn btn-danger" data="<?= $item['id']; ?>" href="delete_category/<?= $item['id']; ?>">delete   <a/></td>
                </tr>
           <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../public/js/jquery.js"></script>
</body>
</html>



