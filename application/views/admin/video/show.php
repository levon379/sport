<?php $url = $video_show->url;
preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
$id = $matches[1];
$width = '460px';
$height = '270px';
?>
    <h1>Video show</h1>
    <hr>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-1 col-sm-8  col-sm-offset-2 col-xs-8 col-xs-offset-2">

                <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
                        src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
                        frameborder="0" allowfullscreen>
                </iframe>


        </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

    </div>
    </div>
