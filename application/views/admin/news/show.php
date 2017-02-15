
    <h1>News show</h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
            <tr><th> Photo </th><td> <img src="<?= base_url(). 'public/uploads/news/'.$news_show->file_name; ?>" width="200" height="200" > </td></tr>
            <tr><th> Title </th><td> <?=$news_show->title; ?> </td></tr>
            <tr><th> Description </th><td> <?=$news_show->description; ?></td></tr>
            </tbody>
        </table>
    </div>
