<h1>Our News <a href="<?= base_url().'admin/news/create_news';?>" class="btn btn-primary btn-xs" title="Add New News"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></h1>
<?php echo validation_errors(); ?>
<div class="table">
        <table class="table table-bordered table-striped table-hover" >
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date_created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news as $items): ?>
                    <tr>
                        <td ><img src="<?= base_url(). 'public/uploads/news/'. $items['file_name']; ?>" vidth="50" height="50"/></td>
                        <td class="title" ><?= $items['title']; ?></td>
                        <td scope="row"><?= $items['description']; ?></td>
                        <td scope="row"><?= date("d.m.y", strtotime($items['date_created'])); ?></td>
                        <td width="100">
                            <a title="View News" class="btn btn-success btn-xs" href="<?= base_url().'admin/news/admin_news_show/'.$items['id']; ?>">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>
                            </a>
                            <a  title="Edit News" class="edit_news btn btn-primary btn-xs" href="<?= base_url().'admin/news/edit_news/'. $items['id']; ?>">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                            </a>
                            <a title="Delete News" class="delete_news btn btn-danger btn-xs" data="<?= $items['id']; ?>" href="<?= base_url().'admin/news/delete_news/'. $items['id']; ?>">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Role"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<div class="text-center">
    <div class=" pagination">
        <?php echo $this->pagination->create_links();  ?>

    </div>
</div>

