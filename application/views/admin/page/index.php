<h1>Page</h1>
<?php echo validation_errors(); ?>
<div class="table">
        <table class="table table-bordered table-striped table-hover" >
            <thead>
                <tr>
                    <th>Image</th>
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

