


<div class="col-lg-10 col-lg-offset-1 col-md-10  col-md-offset-1  col-sm-10 col-sm-offset-2 col-sm-10 col-xs-10 col-xs-offset-1 ">
        <h1>All Video</h1>
        <hr>
        <?php

        foreach ($all_video as $items){
            $url = $items['url'];
            ?>
    <div class="col-xs-12 col-sm-6   col-md-4  col-lg-4 ">
        <div class="thumbnail">
            <iframe class="youtube-player-iframe" type="text/html" width="100%"
                    height="270"
                    src="<?php echo $url ?>"
                    data-src="<?php echo $url ?>"
                    frameborder="0" allowfullscreen>
            </iframe>

        </div>
    </div>
   <?php } ?>


</div>
<div class="clear" > </div>
<div class="text-center">
    <div class=" pagination">
        <?php echo $this->pagination->create_links();  ?>

    </div>
</div>

