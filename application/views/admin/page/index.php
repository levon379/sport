<h1>Page <a href="<?= base_url().'admin/page/create_page';?>" class="btn btn-primary btn-xs" title="Add New Page"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></h1>
<?php echo validation_errors(); ?>
<div class="table">
        <table class="table table-bordered table-striped table-hover" >
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Description</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($page as $items): ?>
                    <tr>
                        <td ><img src="<?= base_url(). 'public/uploads/page/'. $items['file_name']; ?>" vidth="50" height="50"/></td>
                        <td class="title" ><?= $items['title']; ?></td>
                        <td scope="row"><?= $items['description']; ?></td>
                        <td width="100">
                            <a title="View Page" class="btn btn-success btn-xs" href="<?= base_url().'admin/page/page_show/'.$items['id']; ?>">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>
                            </a>
                            <a  title="Edit Page" class=" btn btn-primary btn-xs" href="<?= base_url().'admin/page/edit_page/'. $items['id']; ?>">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                            </a>
                            <a title="Delete Page" class=" btn btn-danger btn-xs" data="<?= $items['id']; ?>" href="<?= base_url().'admin/page/delete_page/'. $items['id']; ?>">
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

