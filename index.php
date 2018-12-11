<!DOCTYPE html>
<?php
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/data/config.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__.'/cache',
));
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Lemon Impex</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php include('header.php'); ?>


        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-2946" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                        <img src="img/home-slider/yellowdiamonds.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme rev-btn first_text"
                            data-x="['center','center','center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['-130','-130','-130','-80','-80','-80']"
                            data-fontsize="['12','12','12','12','12']"
                            data-lineheight="['64','64','64','50','35']"
                            data-width="['550','550','550','550','300']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-type="button"
                            data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-2971-layer-18","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-2971-layer-18","delay":""},{"event":"click","action":"startlayer","layer":"slide-2971-layer-15","delay":""},{"event":"click","action":"startlayer","layer":"slide-2971-layer-19","delay":""},{"event":"click","action":"startlayer","layer":"slide-2971-layer-20","delay":"1000"},{"event":"click","action":"playvideo","layer":"slide-2971-layer-15","delay":"1000"}]'
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['center','center','center','center','center','center']"
                            style="z-index: 8;font-family: 'Poppins', sans-serif;font-weight:600;color:#fff;text-transform: uppercase;">
                            
                                <img src="img/play-video.png" alt="">
                                <span style="text-decoration: underline;padding-left: 10px;">Watch The Overview</span>
                            </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption   tp-resizeme tp-videolayer"
                            id="slide-2971-layer-15"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-whitespace="nowrap"

                            data-type="video"
                            data-responsive_offset="on"

                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                            data-ytid="papuvlVeZg8" data-videoattributes="hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0" data-videowidth="['960px','720px','480px','360px']"
                            data-videoheight="['540px','405px','270px','203px']" data-videoloop="none"         data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-lasttriggerstate="reset"           data-autoplay="off"
                            data-volume="100"
                            style="z-index: 14;text-transform:left;border-width:0px;"> 
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption Agency-CloseBtn rev-btn "
                            id="slide-2971-layer-20"
                            data-x="['center','center','center','center']" data-hoffset="['510','389','270','199']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-298','-229','-163','-118']"
                            data-width="50"
                            data-height="none"
                            data-whitespace="nowrap"

                            data-type="button"
                            data-actions='[{"event":"click","action":"stoplayer","layer":"slide-2971-layer-15","delay":""},{"event":"click","action":"stoplayer","layer":"slide-2971-layer-19","delay":""},{"event":"click","action":"stoplayer","layer":"slide-2971-layer-20","delay":""}]'
                            data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:45deg;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;sX:1.1;sY:1.1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-lasttriggerstate="reset"
                            style="z-index: 15; min-width: 50px; max-width: 50px; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;font-size: 24px;"><i class="fa fa-close"></i> </div>

                            <div class="tp-caption tp-resizeme secand_text"
                                data-x="['center','center','center','center','center','center']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','0','0']"
                                data-fontsize="['48','48','48','28','28','22']"
                                data-lineheight="['60','60','60','36','36','30']"
                                data-width="100%"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text"
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['center','center','center','center','center','center']"

                                style="z-index: 8;font-family:'Poppins', sans-serif;font-weight:700;color:#fff;">Strong they are, <br />Beautiful we make them
                            </div>

                            <div class="tp-caption tp-resizeme slider_button"
                                data-x="['center','center','center','center','center','center']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['130','130','130','100','100','100']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text"
                                data-responsive_offset="on"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                data-textAlign="['center','center','center','center','center','center']">
                                <a class="bg_btn" href="#">About Us</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->

        <!--================Creative Feature Area =================-->
        <section class="creative_feature_area">
            <div class="container">
                <div class="c_feature_box">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h4></a>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h4></a>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h4></a>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="digital_feature p_100">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d_feature_text">
                                <div class="main_title">
                                    <h2>Who We Are !</h2>
                                </div>
                                <p>We are a Diamond manufacturing company focused on making wide range of natural color diamonds.</p>
                                <p>Especially, our expertise in making flawless clarity and excellent cut yellow diamonds has made us world's leading contributor in high-quality yellow color diamond market. </p>
                                <a class="read_btn" href="#">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d_feature_img">
                                <img src="img/feature-right.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Creative Feature Area =================-->

        <!--================Industries Area =================-->
        <section class="industries_area">
            <div class="left_indus">
                <div class="indus_img">
                    <img src="img/indus-laptop.png" alt="">
                </div>
            </div>
            <div class="right_indus">
                <div class="indus_text">
                    <div class="main_title">
                        <h2>We Serve All Industries</h2>
                        <p>We stay on top of our industry by being experts in yours. We measure our success by the results we drive for our clients.</p>
                    </div>
                    <div class="our_skill_inner">
                        <div class="single_skill">
                            <h3>Website Design</h3>
                            <div class="progress" data-value="90">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">90</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Brand Strategy</h3>
                            <div class="progress" data-value="95">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">95</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Digital Marketing</h3>
                            <div class="progress" data-value="85">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">85</span>%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single_skill">
                            <h3>Website Development</h3>
                            <div class="progress" data-value="90">
                                <div class="progress-bar">
                                    <div class="progress_parcent"><span class="counter">90</span>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="read_btn" href="#">Work with us</a>
                </div>
            </div>
        </section>
        <!--================End Industries Area =================-->

        <!--================Our Service Area =================-->
        <section class="service_area">
            <div class="container">
                <div class="center_title">
                    <h2>Current Listing</h2>
                    <p>We Are A Ambitious Diamond Company. Focused on Growing Brands Online</p>
                </div>
                <div class="row service_item_inner">
                    <div class="col-12 col-md-4">
                        <div class="service_item">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img src="img/diamond.svg" height="100%" width="100%">
                                </div>
                            </div><br>
                            <h1 class="display-4 counter">1000</h1>
                            <h4>Diamond</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="service_item">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img src="img/color.svg" height="100%" width="100%">
                                </div>
                            </div><br>
                            <h1 class="display-4 counter">4</h1>
                            <h4>Color</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="service_item">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img src="img/heart.svg" height="100%" width="100%">
                                </div>
                            </div><br>
                            <h1 class="display-4 counter">10</h1>
                            <h4>Shape</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Service Area =================-->

        <!--================Testimonials Area =================-->
        <section class="latest_news_area p_100">
            <div class="container">
                <div class="b_center_title">
                    <h2>Latest Events</h2>
                    <p>We as a Creative Company, Focus on Growing Brands across The World</p>
                </div>
                <div class="l_news_inner">
                    <div class="row">
                        <?php
                        $event_helper = new EventHelper($db);
                        $events = $event_helper->getThreeEvents();
                        foreach($events as $event) {
                            $img_src = $event[EventImage::COL_URL];
                            $event_id = $event[EVENT::COL_ID];
                            $title = $event[EVENT::COL_NAME];
                            $description = $event[EVENT::COL_DESCRIPTION];
                            $event_tmpl = array(
                                'img_src' => $img_src,
                                'title' => $title,
                                'description' => $description
                            ); 
                            echo $twig->render('event_tile.twig',$event_tmpl);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Testimonials Area =================-->

        <!--================Project Area =================-->
        <section class="project_area">
            <div class="container">
                <div class="project_inner">
                    <div class="center_title">
                        <h2>Ready To Work With Us ? </h2>
                        <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <a class="tp_btn" href="#">Contact Us</a>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a class="tp_btn" href="#">Request Diamonds</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Project Area =================-->

        
        <?php include('footer.php'); ?>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
