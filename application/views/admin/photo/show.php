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

    <h1>Photo show</h1>
    <hr>
    <div class="table">
        <table class="table table-bordered table-striped table-hover" >

            <thead>
            <tr>
                <th>Photo name </th>
                <th>Photo</th>

            </tr>


            <tbody>
            <tr>
                <td>
                    <?php echo $photo_show[0]['file_name']; ?>
                </td>
                <td>
                    <img src="<?php echo '/../public/uploads/photo/'. $photo_show[0]['file_name']; ?>" widhh="150" height="150" >
                </td>
            </tr>

            </tbody>
        </table>
    </div>

</div>

<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>