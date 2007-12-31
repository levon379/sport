
    <?php echo validation_errors(); ?>



    <h1 >Photo
        <a href="<?= base_url().'admin/photo/create_photo';?>" class="btn btn-primary btn-xs" >
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

                                <td> <img src="<?= base_url(). 'public/uploads/photo/'. $items['file_name']; ?>" vidth="50" height="50"  alt="img" /></td>
                                <td>
                                    <a title="Edit" class="edit_photo btn btn-primary btn-xs" href="<?= base_url().'admin/photo/edit_photo/'.$items['id']; ?>">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                                    <a/>
                                    <a title="Delete" class="delete_photo btn btn-danger btn-xs" data="<?= $items['id']; ?>" href="<?= base_url().'admin/photo/delete_photo/'.$items['id']; ?>">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    <a/>
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