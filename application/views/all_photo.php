


<div class="col-lg-10 col-lg-offset-1 col-md-10  col-md-offset-1  col-sm-10 col-sm-offset-2 col-sm-10 col-xs-10 col-xs-offset-1 ">
        <h1>Photo Galery</h1>
        <hr>
        <?php
        if(isset($all_photo)){
        foreach ($all_photo as $items){ ?>

    <div class="col-xs-12 col-sm-6   col-md-4  col-lg-4 ">
        <div class="thumbnail">
            <img src="<?= base_url(). 'public/uploads/photo/'. $items['file_name']; ?>" vidth="150" height="150">
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

