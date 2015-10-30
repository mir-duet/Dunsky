<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Rock CastleDescription: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111127

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $title; ?></title>
        <link href= "<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">Rock Castle</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="<?php echo base_url(); ?>home/index.jsp">Homepage</a></li>
                    <li><a href="<?php echo base_url(); ?>home/blog.jsp">Blog</a></li>
                    <li><a href="#">Photos</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="<?php echo base_url(); ?>blogger_login/sign_up">Sign Up</a></li>
                </ul>
            </div>
        </div>
        <div id="splash-wrapper">
            <div id="splash">
                <h2>Nullam pretium nibh ut turpis</h2>
                <p>Lorem ipsum daolor sit amet, consectetur adipiscing elit. Nulla quis orci ut erat iaculis posuere in consequat nulla. Cras vel nisl ipsum, nec tincidunt nunc. Sed egestas lorem nisl, sed dignissim quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce tristique dui sit amet mauris.</p>
            </div>
        </div>
        <!-- end #header -->
        <div id="wrapper">
            <div id="wrapper2">
                <div id="wrapper-bgtop">
                    <div id="page">
                        <div id="content">
                            <?php echo $main_content ?>
                            <div style="clear: both;">&nbsp;</div>
                        </div>
                        <!-- end #content -->
                        <div id="sidebar">
                            <div id="sidebar-bgtop">
                                <div id="sidebar-bgbtm">
                                    <ul>
                                        <li>
                                            <div id="search" >
                                                <form method="get" action="#">
                                                    <div>
                                                        <input type="text" name="s" id="search-text" value="" />
                                                        <input type="submit" id="search-submit" value="GO" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div style="clear: both;">&nbsp;</div>
                                        </li>
                                        <?php
                                        if (isset($tempus)) {
                                            ?>
                                            <li>
                                                <h2>Aliquam tempus</h2>
                                                <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
                                            </li>
                                        <?php } ?>
                                        <li>
                                            <h2>Categories</h2>
                                            <ul>
                                                <?php
                                                foreach ($all_category as $v_category) {
                                                    ?>
                                                    <li><a href="#"><?php echo $v_category->category_name; ?></a></li>

                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li>
                                            <h2>Blogroll</h2>
                                            <ul>
                                                <li><a href="#">Aliquam libero</a></li>
                                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                                <li><a href="#">Urnanet non molestie semper</a></li>
                                                <li><a href="#">Proin gravida orci porttitor</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h2>Archives</h2>
                                            <ul>
                                                <li><a href="#">Aliquam libero</a></li>
                                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                                <li><a href="#">Urnanet non molestie semper</a></li>
                                                <li><a href="#">Proin gravida orci porttitor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end #sidebar -->
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                    <!-- end #page -->
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="content">
                <p>Copyright (c) 2011 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
            </div>
        </div>
        <!-- end #footer -->
    </body>
</html>