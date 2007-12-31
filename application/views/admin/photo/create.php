
<h1>Create Photo</h1>
<hr>

    <form method="post" class="form-horizontal"  action="<?= base_url().'admin/photo/add_photo';?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Upload Image</label>
            <div class=" col-sm-6">
                <input type="file" name="file_name"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                <input class="btn btn-primary form-control" type="submit" value="Create">
            </div>
        </div>
    </form>

