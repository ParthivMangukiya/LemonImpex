<!DOCTYPE html>
<?php
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/data/config.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
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

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet"> -->

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <link href="vendors/animate-css/animate.css" rel="stylesheet">


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

        <?php 
            $pages = array(
                array('link'=>'#','title'=>'Home','active'=>'active'),
                array('link'=>'why_us.php','title'=>'Why Us'),
                array('link'=>'event.php','title'=>'Events'),
                array('link'=>'contact-us.php','title'=>'Contact')
            );
            $header_tmpl = array(
                'pages' => $pages
            ); 
            echo $twig->render('header.twig',$header_tmpl);
        ?>

        <!--================Slider Area =================-->
        <section class="main_slider_area fullwidthbanner-container">
            <div id="main_slider" class="rev_slider fullwidthabanner" data-version="5.3.1.6" >
            <ul>
                    <li data-index="rs-2946" data-transition="fade" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="img/home-slider/slider.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    </li>
                    <li data-index="rs-2947" data-transition="fade" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="img/home-slider/slider2.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
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
                                <p>Our customer satisfaction first approach has gained us reputation of one of the most reliable brand in fancy market.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h4></a>
                                <p>We have expertise in fancy yellow color diamonds. We have staff having more than 25 years of experience from sales to manufacturing department.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="c_box_item">
                                <a href="#"><h4><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h4></a>
                                <p>We emphasize quality over quantity. We are known for the quality yellow diamonds of almost all shapes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="digital_feature p_100">
                    <div class="row align-center-flex">
                        <div class="col-lg-6">
                            <div class="d_feature_img">
                                <img src="img/home/main_tile.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d_feature_text">
                                <div class="main_title">
                                    <h2>Who We Are !</h2>
                                </div>
                                <p>We are a Diamond manufacturing company focused on making wide range of natural color diamonds.</p>
                                <p>Especially, our expertise in making flawless clarity and excellent cut yellow diamonds has made us world's leading contributor in high-quality yellow color diamond market. </p>
                                <a class="read_btn" href="why_us.php">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Creative Feature Area =================-->
        
        <!--================Our Service Area =================-->
        <section class="service_area">
            <div class="container">
                <!-- <div class="center_title">
                    <h2>Current Listing</h2>
                </div> -->
                <div class="row service_item_inner">
                    <div class="col-4">
                        <div class="service_item">
                            <div class="row justify-content-center">
                                <div class="col-8 col-md-4">
                                    <img src="img/diamond.svg" height="100%" width="100%">
                                </div>
                            </div><br>
                            <h1 class="counter">500</h1>
                            <h4>Diamond</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="service_item">
                            <div class="row justify-content-center">
                                <div class="col-8 col-md-4">
                                    <img src="img/color.svg" height="100%" width="100%">
                                </div>
                            </div><br>
                            <h1 class="counter">6</h1>
                            <h4>Color</h4>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="service_item">
                            <div class="row justify-content-center">
                                <div class="col-8 col-md-4">
                                    <img src="img/heart.svg" height="100%" width="100%">
                                </div>
                            </div><br>
                            <h1 class="counter">7</h1>
                            <h4>Shape</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our Service Area =================-->

        <!--================Event Area =================-->
        <section class="p_100">
            <div class="container" style="padding:0px;">
                <div class="b_center_title">
                    <h2>Latest Events</h2>
                    <p>We as a Creative Company, Focus on Growing Brands across The World</p>
                </div>
                <div class="event_area">
                    <?php
                    $event_helper = new EventHelper($db);
                    $events = $event_helper->getLatestThreeEvents();
                    foreach($events['data'] as $event) {
                        $img_src = $event[EventImage::COL_URL];
                        $event_id = $event[EVENT::COL_ID];
                        $title = $event[EVENT::COL_NAME];
                        $short_description = $event[EVENT::COL_SHORT_DESCRIPTION];
                        $start_date = strtotime($event[Event::COL_DATE_BEGIN]);
                        $end_date = strtotime($event[Event::COL_DATE_END]);
                        $event_tmpl = array(
                            'img_src' => $img_src,
                            'title' => $title,
                            'short_description' => $short_description,
                            'start_date' =>  date("d M y", $start_date),
                            'end_date' => date("d M y", $end_date)
                        ); 
                        echo $twig->render('latest_event_tile.twig',$event_tmpl);
                    }
                    ?>
                </div>
            </div>
        </section>
        <!--================End Event Area =================-->

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
                            <a class="tp_btn" href="contact-us.php">Contact Us</a>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a class="tp_btn" href="contact-us.php">Request Diamonds</a>
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

        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>

        <script src="js/theme.js"></script>
        <script>
            $('.counter').counterUp({
                delay: 2,
                time: 100
            });
        </script>


    </body>
</html>
