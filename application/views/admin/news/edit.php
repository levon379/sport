
    <h1>Edit News</h1>
    <hr>
            <form method="post" class="form-horizontal" id="form_news" action="<?= base_url().'/admin/news/edit_news_save';?>" enctype="multipart/form-data">
                <input type="hidden" value="<?=$news_show->id; ?>" name="id" >
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control " value="<?=$news_show->title; ?>" required="required" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Upload Image</label>
                    <div class=" col-sm-6">
                        <img src="<?php echo '/../public/uploads/news/'. $news_show->file_name; ?>" vidth="50" height="50"  alt="img" />
                        <input type="file" name="file_name"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description:</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" cols="50" rows="10"  name="description"><?=$news_show->description; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        <input class="btn btn-primary form-control" type="submit" value="Update">
                    </div>
                </div>

            </form>
    </div>

