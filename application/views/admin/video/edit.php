
    <h1>Edit Video</h1>
    <hr>

            <form method="post" class="form-horizontal"  action="<?= base_url().'admin/video/edit_video_save';?>" enctype="multipart/form-data">
                <input type="hidden" value="<?=$video_show->id; ?>" name="id" >
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Url:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control " value="<?=$video_show->url; ?>" required="required" name="url">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        <input class="btn btn-primary form-control" type="submit" value="Update">
                    </div>
                </div>
            </form>
