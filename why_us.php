<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Fancy</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
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
            require __DIR__.'/vendor/autoload.php';
            require __DIR__.'/data/config.php';

            $loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
            $twig = new Twig_Environment($loader, array(
            ));
            
        ?>
        
        <?php 
            $pages = array(
                array('link'=>'index.php','title'=>'Home'),
                array('link'=>'#','title'=>'Why Us','active'=>'active'),
                array('link'=>'event.php','title'=>'Events'),
                array('link'=>'contact-us.php','title'=>'Contact')
            );
            $header_tmpl = array(
                'pages' => $pages
            ); 
            echo $twig->render('header.twig',$header_tmpl);
        ?>
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>Why Us</h4>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="p_100">
            <div class="main_title container">
                <div class="text-center mb-2">
                    <h2>History</h2>
                </div>
                <div class = "row">
                    <div class="col-lg-6 vr">
                        <p align="justify">Mr. Akash Mangukiya, the man behind Lemon Impex HK started his journey in Mumbai at an early age of 21 years as working in a diamond trading firm.</p>
                        <p align="justify">With the love for diamond, he ended up opening his own firm with a vision becoming one of the leading manufacturers in the field on Natural Fancy Color Diamonds. He always felt an innate inclination towards diamonds that made him took his first baby step. He started working in a local diamond shop where he learned the basics of diamond for 3 years.</p>
                    </div>
                    <div class="col-lg-6">
                        <p align="justify">The subsequent chapter was HK which is the major hub for diamond trading. He spent the following two years in a factory where he worked all day acquiring in-depth knowledge and simultaneously envisioning the birth of Lemon Impex HK.</p>
                        <p align="justify">With his sack full of apt knowledge and valor he returned to Mumbai. He started his own venture in May 2014 and named it “Lemon Impex”. The word “Lemon” was picked up from the sparkling of Natural Yellow Color diamond. With his determination towards the company and the only focus to spread his roots worldwide, there is no looking back.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="vision_area">
            <div class="d-flex flex-wrap flex-row container">
                <div class="col-md-6 pr-lg-5 mb-3 align-content-stretch">
                    <div class="box d-flex flex-column">
                        <div class="main_title mt-4">
                            <h2>VISION</h2>
                        </div>
                        <div class="d-flex justify-content-center flex-column flex-grow-1">
                            <p class="vision_text">To make a perceptible marque in the industry of jewelry making and diamond manufacturing all over through persistence and hard work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-lg-5 mb-3 align-content-stretch">
                    <div class="box">
                        <div class="main_title mt-4 mb-4">
                            <h2>MISSION</h2>
                        </div>
                        <ul class="mission_list">
                            <li>Creating a business environment of utmost trust among all levels and functions</li>
                            <li>Demonstrate full commitment, quest for excellence and continuous improvement</li>
                            <li>Develop and support legal and technical infrastructure that maximizes creativity, sharing, and innovation</li>
                            <li>To inspire lifelong learning by integrating knowledge with technology and strengthening our establishment</li>
                        </ul>
                    </div>
                </div>
            
            </div>
        </section>

        <section class="affiliation_area">
            <div class="main_title text-center mb-2">
                <h2>AFFILIATIONS</h2>
            </div>
            <ul class="affiliations_logos">
                <li class="px-lg-3" id="rapnet">
                    <img class="normal" src="img/whyus/rapnet.png" alt="RAPNET" title="RAPNET">
                    <span class="hover">ID : 95058</span>
                </li>
                <li class="px-lg-3">
                    <img src="img/whyus/gia.png" alt="GIA" title="GIA">
                </li>
                <li class="px-lg-3">
                    <img src="img/whyus/gjepc.png" alt="GJEPC" title="GJEPC">
                </li>
            </ul>
            
        </section>
        <!--================End Static Area =================-->

        <?php include('footer.php'); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
