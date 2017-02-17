
    <h1>News show</h1>
    <hr>
    <div class="left-panel">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-8  col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <img src="<?= base_url().'public/uploads/news/'.$news_show->file_name; ?>"width="100%" height="100%" alt=""/>
                        </div>
                        <div class="icerik-bilgi">
                            <h2><?=$news_show->title; ?></h2>
                            <h5><?=date("d.m.y", strtotime($news_show->date_created)); ?></h5>
                            <p><?=$news_show->description; ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>