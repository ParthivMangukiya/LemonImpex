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
                array('link'=>'why_us.php','title'=>'Why Us'),
                array('link'=>'#','title'=>'Events','active'=>'active'),
                array('link'=>'contact-us.php','title'=>'Contact')
            );
            $header_tmpl = array(
                'pages' => $pages
            ); 
            echo $twig->render('header.twig',$header_tmpl);
        ?>
        <!--================Banner Area =================-->
        <section class="banner_area banner_area-event">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>Events</h4>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="p_100">
            <div class="event_area container">
                <?php
                    $event_helper = new EventHelper($db);
                    $events = $event_helper->getEvents();
                    foreach($events['data'] as $event) {
                        $img_src = $event['images'][0];
                        $event_id = $event[Event::COL_ID];
                        $title = $event[Event::COL_NAME];
                        $start_date = strtotime($event[Event::COL_DATE_BEGIN]);
                        $end_date = strtotime($event[Event::COL_DATE_END]);
                        $description = $event[Event::COL_DESCRIPTION];
                        $event_tmpl = array(
                            'img_src' => $img_src,
                            'title' => $title,
                            'description' => $description,
                            'start_date' =>  date("d M y", $start_date),
                            'end_date' => date("d M y", $end_date),
                            'id' => $event_id
                        ); 
                        echo $twig->render('event_tile.twig',$event_tmpl);
                    }
                ?>
            </div>
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
