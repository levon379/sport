
    <h1>Create Video</h1>
    <hr>

            <form method="post" class="form-horizontal"  action="<?= base_url().'admin/video/add_video';?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Url:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control " required="required"  name="url">

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        <input class="btn btn-primary form-control" type="submit" value="Create">
                    </div>
                </div>
            </form>
