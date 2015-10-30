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
        <!-- Bootstrap Css  -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" media="all" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css_slider/slider.css" media="all" />
        <!-- main CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" media="all" />
        <!-- Slider JS -->
        <script type="text/javascript" src="js_slider/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js_slider/jssor.slider.mini.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                var jssor_1_options = {
                  $AutoPlay: true,
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $Cols: 3,
                    $SpacingX: 4,
                    $SpacingY: 4,
                    $Orientation: 2,
                    $Align: 0
                  }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 980);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
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
                    <div id="jssor_1" class="slide">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('img_slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="img_slider/002.jpg" />
                                <div data-u="thumb">
                                    <img class="i" src="img_slider/thumb-002.jpg" />
                                    <div class="t">Banner Rotator</div>
                                    <div class="c">360+ touch swipe slideshow effects</div>
                                </div>
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="img_slider/003.jpg" />
                                <div data-u="thumb">
                                    <img class="i" src="img_slider/thumb-003.jpg" />
                                    <div class="t">Image Gallery</div>
                                    <div class="c">Image gallery with thumbnail navigation</div>
                                </div>
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="img_slider/004.jpg" />
                                <div data-u="thumb">
                                    <img class="i" src="img_slider/thumb-004.jpg" />
                                    <div class="t">Carousel</div>
                                    <div class="c">Touch swipe, mobile device optimized</div>
                                </div>
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="img_slider/005.jpg" />
                                <div data-u="thumb">
                                    <img class="i" src="img_slider/thumb-005.jpg" />
                                    <div class="t">Themes</div>
                                    <div class="c">30+ professional themems + growing</div>
                                </div>
                            </div>
                            <div data-p="112.50" style="display: none;">
                                <img data-u="image" src="img_slider/006.jpg" />
                                <div data-u="thumb">
                                    <img class="i" src="img_slider/thumb-006.jpg" />
                                    <div class="t">Tab Slider</div>
                                    <div class="c">Tab slider with auto play options</div>
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;left:605px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;right:5px;width:200px;height:300px;" data-autocenter="2">
                            <!-- Thumbnail Item Skin Begin -->
                            <div data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div data-u="thumbnailtemplate" class="tp"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora02l" style="top:123px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                        <span data-u="arrowright" class="jssora02r" style="top:123px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
                        <a href="http://www.jssor.com" style="display:none">Jssor Slider</a>
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

        
        <script type="text/javascript" src="<?php echo base_url(); ?>pgw_slider/pgwslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.2.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/dunsky.js"></script>
    </body>
</html>