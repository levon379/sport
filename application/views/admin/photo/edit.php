

    <h1>Edit News</h1>
    <hr>
    <form method="post" class="form-horizontal" action="<?= base_url().'admin/photo/edit_photo_save';?>" enctype="multipart/form-data">
        <input type="hidden" value="<?= $photo_show->id; ?>" name="id">

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Upload Image</label>
            <div class=" col-sm-6">
                <img src="<?= base_url().'public/uploads/photo/'. $photo_show->file_name; ?>" vidth="50" height="50"  alt="img" />
                <input type="file" name="file_name"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                <input class="btn btn-primary form-control" type="submit" value="Update">
            </div>
        </div>
    </form>
