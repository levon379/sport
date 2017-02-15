
    <h1 class="text-center title-school-page"> <?=$news_show->title; ?></h1>
    <h1 class="text-center title-school-page"> <?=$news_show->date_created; ?></h1>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-1 col-sm-8  col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <img src="<?= base_url().'public/uploads/news/'.$news_show->file_name; ?>" width="150" height="150" >
        </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

    </div>
    </div>
    <div class="row description-school-page">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-1 col-sm-8  col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <pre> <?=$news_show->description; ?>
            </pre>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

        </div>
    </div>


