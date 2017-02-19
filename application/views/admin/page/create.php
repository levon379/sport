<h1>Create Page</h1>
    <hr>
    <?php echo validation_errors(); ?>
            <form method="post" class="form-horizontal" action="<?= base_url().'admin/page/add_page';?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control " required="required"  name="title">

                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Upload image</label>
                    <div class=" col-sm-6">
                    <input type="file" name="file_name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description:</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" cols="50" rows="10" id="text" name="description"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group">
                <div class="col-sm-offset-3 col-sm-3">
                    <input class="btn btn-primary form-control" type="submit" value="Create">
                </div>
                </div>
            </form>


