

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

        <h1>Video <a href = "<?=base_url().'/admin/video/create_video';?>" class="btn btn-primary btn-xs" >
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
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
                                    <a title="Edit Video" class="btn btn-primary btn-xs" href="<?= base_url().'admin/video/edit_video/'.$items['id']; ?>">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                                    <a/>
                                    <a title="Delete Video" class="btn btn-danger btn-xs" data="<?= $items['id']; ?>" href="<?= base_url().'admin/video/delete_video/'. $items['id']; ?>">
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