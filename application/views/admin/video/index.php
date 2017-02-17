
    <h1>Video <a href = "<?=base_url().'/admin/video/create_video';?>" class="btn btn-primary btn-xs" >
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              </a>
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
                                <a  title="View Video" class="btn btn-success btn-xs"  href="<?= base_url().'admin/video/video_show/'.$items['id']; ?>">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"/>
                                </a>
                                <a title="Edit Video" class="btn btn-primary btn-xs" href="<?= base_url().'admin/video/edit_video/'.$items['id']; ?>">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                                </a>
                                <a title="Delete Video" class="btn btn-danger btn-xs" data="<?= $items['id']; ?>" href="<?= base_url().'admin/video/delete_video/'. $items['id']; ?>">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    <div class="text-center">
        <div class=" pagination">
            <?php echo $this->pagination->create_links();  ?>

        </div>
    </div>