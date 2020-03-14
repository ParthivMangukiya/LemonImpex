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

        <!-- Rev slider css -->
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

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
                array('link'=>'why_us.php','title'=>'Why Us'),
                array('link'=>'event.php','title'=>'Events'),
                array('link'=>'#','title'=>'Contact','active'=>'active')
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
                    <h4>Contact Us</h4>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Contact Us Area =================-->
        <section class="contact_us_area">
            <div class="container">
                <div id="mapBox" class="mapBox row m0"
                    data-lat="22.297900"
                    data-lon="114.174530"
                    data-zoom="18"
                    data-marker="img/map-marker.png"
                    data-info="Broadway Hotel"
                    data-mlat="22.297900"
                    data-mlon="114.174530">
                </div>
                <div class="contact_details_inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact_text">
                                <div class="main_title">
                                    <h2>Contact Us</h2>
                                    <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most</p>
                                </div>
                                <div class="contact_d_list">
                                    <div class="contact_d_list_item">
                                        <a href="#">(+852) 5616 3534</a>
                                        <a href="#">info@lemonimpexhk.com</a>
                                    </div>
                                    <div class="contact_d_list_item">
                                        <p> 405, Hart Avenue Plaza <br> TST, Hong Kong</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_form">
                                <div class="main_title">
                                    <h2>Get In Touch With Us!</h2>
                                    <p>Fill out the form below to recieve a free and confidential.</p>
                                </div>
                                <form class="contact_us_form row" action="api/v1/contact_us" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn submit_btn2 form-control">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Us Area =================-->

        <?php include('footer.php'); ?>

        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" onclick="clearForm()" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" onclick="clearForm()" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADDgQkESfP_nIbWcqcf8DpCWrv3yJHSbA"></script>
        <script src="js/gmaps.min.js"></script>

        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
