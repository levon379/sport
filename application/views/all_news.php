


        <div class="col-lg-10 col-lg-offset-1 col-md-10  col-md-offset-1  col-sm-10 col-sm-offset-2 col-sm-10 col-xs-10 col-xs-offset-1 ">
            <h1>Our News</h1>
            <hr>
            <?php
            if(isset($all_news)){
            foreach ($all_news as $items){ ?>

        <div class="col-xs-12 col-sm-6   col-md-4  col-lg-4 ">
            <div class="thumbnail">

                <img src="<?= base_url(). 'public/uploads/news/'. $items['file_name']; ?>" vidth="50" height="50">
                <div class="caption">
                    <h3><?=$items['title']; ?></h3>
                    <h6><?=date("d.m.y", strtotime($items['date_created'])) ?></h6>
                    <p><?=substr($items['description'], 0, 300);?> ...</p>

                    <a href="<?= base_url().'welcome/get_news/'.$items['id']; ?>" class="btn btn-success">
                        View more...
                        <i class="fa fa-arrow-right"></i>
                    </a>


                </div>
            </div>
        </div>
       <?php }} ?>


    </div>
    <div class="clear" > </div>
            <div class="text-center">
                <div class=" pagination">
                    <?php echo $this->pagination->create_links();  ?>

                </div>
            </div>

