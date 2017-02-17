<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url() . 'public/bootstrap/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?= base_url() . 'public/css/style.css'; ?>">
    <link rel="stylesheet" href="<?= base_url() . 'public/css/image_galery.css'; ?>">
    <meta charset="utf-8">
    <title>Davit Fahradyan Page</title>


</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="cover col-lg-12 col-md-12 ">
                <div class="row">
                    <div class=" col-lg-4 col-lg-offset-1  col-md-4 col-md-offset-1  ">
                        <img src="<?= base_url() . 'public/img/logo.png'; ?>" height="200" width="200" alt="">
                        <h2 class="welcome-title-head">WELCOME TO OUR</h2>
                        <h1 class="school-title-head">SCHOOL</h1>
                        <h2 class="fahradyan-title-head">DAVID FAHRADYAN</h2>
                        <p class="description-head">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of
                            type and scrambled it to make a type
                        </p>
                        <a href="" class="btn button-head">see more...</a>

                        <!-- <a href="" class="btn" style="width:100%;font-size:128%;background: rgb(198, 167, 41);color:white;border-radius:0px;">-->
                        <!-- see more...</a>-->

                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        <!--                    <img src="../public/img/dav_fah.png" height="500" width="400">-->
                    </div>
                </div>
            </div>
        </div>
        <!-- bio awards shcool start-->
        <div class="row about-cover">
            <div class="about-cover-div">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-4 school-bio-records-image-container">
                            <img src="<?= base_url() . 'public/img/' . $school[0]['image']; ?>" width="100%"
                                 class="about-img">

                            <h1 class="about-title"><?= $school[0]['title']; ?></h1>
                            <p class="about-description">
                                <?= substr($school[0]['description'], 0, 250); ?>...
                            </p>
                            <a href="<?php echo site_url('welcome/school') ?>" class="btn about-button">see more...</a>

                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-4 school-bio-records-image-container">
                            <img src="<?= base_url() . 'public/img/bio.png'; ?>" width="100%"
                                 class="about-img">
                            <h1 class="about-title">BIOGRAPHY</h1>
                            <p class="about-description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.

                                Lorem Ipsum has been
                            </p>
                            <a href="" class="btn about-button">see more...</a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-4 school-bio-records-image-container">
                            <img src="<?= base_url() . 'public/img/records.png'; ?>" width="100%"
                                 class="about-img">
                            <h1 class="about-title">RECORDS</h1>
                            <p class="about-description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.

                                Lorem Ipsum has been
                            </p>
                            <a href="" class="btn about-button">see more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bio awards shcool end-->
        <!-- video galery start -->
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 video-bottom-border">
                <div class="row">
                    <div class="col-lg-5 col-md-5 video-cover">
                        <div class="row">
                            <h1 class="title-video">LOREM ISPUMN</h1>
                            <h1 class="secondary-title-video">There are many</h1>
                            <h1 class="secondary-title-video">variations of passages</h1>
                            <p class="description-video">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been
                            </p>
                            <a href="#" class="btn button-video">VIEW ALL VIEDEOS</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="row">
                            <div style="float: left">
                                <div class="carousel-arrow">
                                    <div class="carousel-arrow-left ">
                                        <a class="left" href="#myCarousel" role="button" data-slide="prev">
                                            <img src="/public/img/left-arrow.png">
                                            <!-- <span class="sr-only">Previous</span>-->
                                        </a>
                                    </div>
                                    <div class="carousel-arrow-right">
                                        <a class="right" href="#myCarousel" role="button" data-slide="next">
                                            <img src="/public/img/right-arrow.png">
                                            <!--                                    <span class="sr-only">Next</span>-->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <?php
                                    $first = true;
                                    foreach ($slider_data as $item) :
                                        $url = $item['src'];
                                        if ($item['type'] == 'photo') { ?>
                                            <div class="item <?= $first ? 'active' : '' ?>">
                                                <img src="<?= base_url() . 'public/uploads/photo/' . $url; ?>" alt=""
                                                     width="100%" height="270">
                                            </div>
                                        <?php } else { ?>
                                            <div class="item <?= $first ? 'active' : '' ?>">
                                                <iframe class="youtube-player-iframe" type="text/html" width="100%"
                                                        height="270"
                                                        src="<?php echo $url ?>"
                                                        data-src="<?php echo $url ?>"
                                                        frameborder="0" allowfullscreen>
                                                </iframe>
                                            </div>
                                            <?php
                                        }
                                        $first = false;
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video galery end -->
        <!-- photo galery start -->
        <div class="row">
            <h1 class="text-center">PHOTO GALERY</h1>
        </div>

        <div class="row cover-photo">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">

                <div class="col-md-4 col-sm-4 co-xs-4 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#2">
                            <img src="<?= base_url() . 'public/img/records.png'; ?>">
                        </a>
                        <div class="modal fade" id="2" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="<?= base_url() . 'public/img/records.png'; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8 co-xs-8 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#1">
                            <img src="<?= base_url() . 'public/img/records.png'; ?>">
                        </a>
                        <div class="modal fade" id="1" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="<?= base_url() . 'public/img/records.png'; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-3 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#3">
                            <img src="<?= base_url() . 'public/img/records.png'; ?>">
                        </a>
                        <div class="modal fade" id="3" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="<?= base_url() . 'public/img/records.png'; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-3 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#4">
                            <img src="<?= base_url() . 'public/img/records.png'; ?>">
                        </a>
                        <div class="modal fade" id="4" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="<?= base_url() . 'public/img/records.png'; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-3 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#5">
                            <img src="<?= base_url() . 'public/img/records.png'; ?>">
                        </a>
                        <div class="modal fade" id="5" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="<?= base_url() . 'public/img/records.png'; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- photo galery end -->
        <!-- our news start -->
        <div class="row grad">

            <!--            <img src="../public/bootstrap/img/grad_cover.png" />-->
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10  col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <span class="title-head-our-news">OUR NEWS</span>
                <a href="<?= base_url() . 'welcome/get_all_news/'; ?>">
                    <span class="link-our-news">View all</span>
                </a>
                <div class="row bottom-border-our-news">
                    <?php

                    foreach ($news as $item) { ?>
                        <div class=" col-lg-4 col-md-4 col-xs-12">
                            <img src="<?= base_url() . 'public/uploads/news/' . $item['file_name']; ?>" width="60%"
                                 alt="post img" class="pull-left img-responsive margin10">
                            <h1 class="title-our-news"><?= $item['title']; ?></h1>
                            <h1 class="secondary-title-our-news"><?= date("d.m.y", strtotime($item['date_created'])); ?></h1>
                            <p class="description-our-news">
                                <?= substr($item['description'], 0, 250); ?>...
                            </p>
                            <p>
                                <a href="<?= base_url() . 'welcome/get_news/' . $item['id']; ?>" class="button-our-news">View
                                    more</a>
                            </p>
                        </div>

                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 "></div>
            <!--footer start-->
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-offset-1 col-xs-5 footer-panel">
                    <p><img src="<?= base_url() . 'public/img/phone.png'; ?>" height="28" width="28" align="left"/>
                        <span class="phone-number">+374 91 00 00 00</span>
                    </p>
                </div>
                <div class="col-lg-offset-5 col-lg-3 col-lg-offset-5 col-lg-3 col-xs-offset-1 col-xs-4 by-Astudio-panel">
                    <span class="by-Astudio">design and developmant by Astudio</span>
                </div>
            </div>
            <!--footer end-->
        </div>
        <!-- our news end -->
    </div>


    <script type="text/javascript" src="<?= base_url() . 'public/bootstrap/js/jquery-1.11.3.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'public/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url() . 'public/js/script.js'; ?>"></script>
</body>
</html>