<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Dunsky LTD</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- pgw_slider -->
        <link href="<?php echo base_url(); ?>pgw_slider/pgwslider.css" type="text/css" media="all" rel="stylesheet" />
        <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>pgw_slider/pgwslider.js"></script>

        <!-- Bootstrap Css  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" media="all" />
        <!-- main CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" media="all" />
        
        <script type="text/javascript" language="javascript">
            $(document).ready(function() {
                $('.pgwSlider').pgwSlider();
            });
        </script>
    </head>

    <body>
        <div class="container">   
            <div class="clear"></div>
            <div class="row">
                <div class="col-sm-2">
                    <div>
                        <img class="img-responsive logo" src="<?php echo base_url(); ?>images/logo.png" alt="LOGO" height="200px" width="200px" />
                    </div>
                </div>
                <div class="col-sm-10 col-nav">
                    <div class="cntr mt20">
                        <div class="pgwSlider wide">
                            <div class="ps-current">
                                    <ul>
                                        <li class="elt_1">
                                            <img src="http://static.pgwjs.com/img/pg/slider/paris.jpg" alt="Paris, France">
                                        </li>
                                        <li class="elt_2">
                                            <img src="http://static.pgwjs.com/img/pg/slider/montreal.jpg" alt="Montréal, Canada">
                                        </li>
                                        <li class="elt_3">
                                            <img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg" alt="Shanghai, China">
                                        </li>
                                        <li style="z-index: 2; display: list-item; opacity: 1;" class="elt_4">
                                            <a href="http://www.nyc.gov" target="_blank">
                                                <img src="http://static.pgwjs.com/img/pg/slider/new-york.jpg" alt="New York, USA">
                                            </a>
                                        </li>
                                    </ul>
                                    <span  class="ps-caption">
                                        <a href="http://www.nyc.gov" target="_blank">
                                            <b>New York, USA</b>
                                        </a>
                                    </span>
                            </div>
                            <ul class="ps-list">
                                <li >
                                    <img src="http://static.pgwjs.com/img/pg/slider/paris.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars">
                                    <span>Paris, France</span>
                                </li>
                                <li >
                                    <img src="http://static.pgwjs.com/img/pg/slider/montreal_mini.jpg" alt="Montréal, Canada" data-large-src="http://static.pgwjs.com/img/pg/slider/montreal.jpg">
                                    <span>Montréal, Canada</span>
                                </li>
                                <li >
                                    <img src="http://static.pgwjs.com/img/pg/slider/shanghai.jpg">
                                    <span>Shanghai, China</span>
                                </li>
                                <li >
                                    <a href="http://www.nyc.gov" target="_blank">
                                        <img src="http://static.pgwjs.com/img/pg/slider/new-york.jpg">
                                        <span>New York, USA</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-10 col-nav">
                    <div id="cssmenu">
                        <ul>
                            <li><a href="#"><span>ABOUT US</span></a>
                                <ul>
                                    <li><a href="#"><span>Welcome</span></a></li>
                                    <li><a href="#"><span>Team</span></a></li>
                                    <li><a href="#"><span>Mission and Values</span></a></li>
                                    <li><a href="#"><span>Sustainability</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>EXPERTISE</span></a>
                                <ul>
                                    <li><a href="#"><span>Sectors</span></a></li>
                                    <li><a href="#"><span>Service Areas</span></a></li>                                   
                                    <li><a href="#"><span>Approach</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>CLIENTS</span></a>
                                <ul>
                                    <li><a href="#"><span>Our Clients</span></a></li>                                 
                                    <li><a href="#"><span>Testimonials</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>CONTACT US</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="main">
                <div class="col-sm-2 left">
                    <a href="#" class="bulletin">Subscribe to our newsletter</a>
                    <h2>News</h2>
                    <ul class="nav">
                        <?php
                        foreach ($all_category as $v_category) {
                            ?>
                            <li class="">
                                <div class="upw-content">
                                    <p class="post-title">
                                        <a href="#"><?php echo $v_category->category_name; ?></a>
                                    </p>
                                </div>
                            </li>

                        <?php } ?>
                    </ul>
                    <h5><a href="#" title="Click to view past newsletters">Past Newsletters</a></h5>
                </div>
                <div class="col-sm-7 content">
                    <div class="clear"></div>
                    <?php echo $main_content ?>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <div class="col-sm-3 content">
                    <div class="clear"></div>
                    <div class="aside" >
                        <div class="slideshow" >
                            <div class="slideset" style="height: 300px;" >
                                <div >
                                    <blockquote>
                                        <div>
                                            <q><span>Philippe is the guy you want on your team – his expertise is deep and broad, and he is an absolute delight to work with. His team was instrumental in developing Efficiency Maine's first DSM plan.</span></q>
                                            <cite>Vice-Chair</cite>
                                        </div>
                                    </blockquote>
                                    <strong class="logo"><a href="#"><img src="<?php echo base_url(); ?>images/efficiency-nscotia.png"  alt="Efficiency Maine Trust"></a></strong>
                                    <div class="more"><a href="#">MORE</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="footer">
                <div class="nav-holder">
                    <ul class="sub-nav">
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">EXPERTISE</a></li>
                        <li><a href="#">CLIENTS</a></li>
                        <li><a href="#">CONTACT US</a></li>
                    </ul>  
                </div>                        
                <span class="copyright">© Md. Mir Hossain All Right Reserved. </span>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.2.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/dunsky.js"></script>
    </body>
</html>