<?php
function getAllDataProjects() {
//  $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = "admin/models/General.php";
    $fullSelectPath = "admin/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectCares = new Select("projects");
    $selectedCares = $selectCares->getAllData();
  $data = mysqli_num_rows($selectedCares);
    return $data;
}
function getAllDataProjectsOffcet($start) {
//  $dir =  dirname(dirname(__FILE__));
    $fullGeneralPath = "admin/models/General.php";
    $fullSelectPath = "admin/models/Select.php";

    require_once $fullGeneralPath;
    require_once $fullSelectPath;

    $selectCares = new Select("projects");
    $selectedCares = $selectCares->getAllDataOffcet($start);

    return $selectedCares;
}
?>
<!doctype html>
<html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Banha Online</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="logo.png">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick/slick.css">
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">

        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Call us: 1234 5678 90</a></li>
                                        <li><a href="mailto:sales@creativeidea-eg.com"><i class="fa fa-envelope-o"></i> Contact us: sales@creativeidea-eg.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="attr-nav">
                        <ul>

                        </ul>
                    </div>

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand" style="padding-top:10px">
                            <img src="assets/logo.png" class="logo" alt="" style="width: 200px">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#contact">About</a></li>
                            <li><a href="#features">Service</a></li>
                            <li><a href="#product">Portfolio</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </nav>

            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>Made</strong></h2>
                                            <h1 class="text-white">We Do Business All Of Time</h1>
                                            <h3 class="text-white">- We Create a <strong>Concept</strong> into The Market -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="contact.php" class="btn btn-primary m-top-20">Order Service Now</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>Made</strong></h2>
                                            <h1 class="text-white">We Do Business All Of Time</h1>
                                            <h3 class="text-white">- We Create a <strong>Concept</strong> into The Market -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="contact.php" class="btn btn-primary m-top-20">Order Service Now</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>Made</strong></h2>
                                            <h1 class="text-white">We Do Business All Of Time</h1>
                                            <h3 class="text-white">- We Create a <strong>Concept</strong> into The Market -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="contact.php" class="btn btn-primary m-top-20">Order Service Now</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                </div>
                            </div>

                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--Featured Section-->
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-3">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-book" style="font-size: 50px"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Booking Domain</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-wikipedia-w" style="font-size: 41px"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Web Hosting</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-file-code-o" style="font-size: 45px"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Web Design</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-eye" style="font-size: 41px"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Graphic Design</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-top: 5%">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-line-chart" style="font-size: 41px"></i>
                                    </div>
                                    <div class="f_item_text" >
                                        <h3>Social Media</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-top: 5%">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-lightbulb-o" style="font-size: 45px"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Advertising</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-top: 5%">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-tachometer" style="font-size: 45px"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Websites Management</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" style="padding-top: 5%">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-mobile" style="font-size: 60px"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Mobile Apps</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                            in sit amet mattis volutpat rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->

            <!--product section-->
            <section id="product" class="product bg-grey">
                <div class="container">
                    <div class="main_product roomy-80">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Our Projects</h2>
                            <h5>Clean and Modern design is our best specialist</h5>
                        </div>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                                <?php
$productdata=getAllDataProjects();
$count=$productdata;
//echo $count;
$flag=0;
for ($i=0; $i < ceil($count/4) ; $i++) { 
    # code...

    ?>
                                <div class="item  <?= $i==0 ?'active' : '' ?>">
                                    <div class="container">
                                        <div class="row">
                                        <?php 
                                        foreach (getAllDataProjectsOffcet($flag) as $pro) {
                                            # code...
                                       
                                        ?>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="admin/<?php  echo  str_replace("../","",$pro['cover']); ?>" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="admin/<?php  echo  str_replace("../","",$pro['cover']); ?>" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5><?= $pro['title'] ?></h5>
                                                        <h6><?= $pro['type'] ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                            </div>
                                    </div>
                                </div>
<?php  $flag=$flag+4; } ?>
                              
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Product section -->

            <!--Call to  action section-->
            <section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            <div class="col-md-12">
                                <div class="action_item text-center">
                                    <h2 class="text-white text-uppercase">Your Promotion Text Will Be Here</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>




            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">About Us</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet consec tetur adipiscing elit
                                        nulla aliquet pretium nisi in cursus
                                        maecenas nec eleifen.</p>


                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                                123 suscipit ipsum nam auctor
                                                mauris dui, ac sollicitudin mauris,
                                                Bandung</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                            <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>+1 2345 6789</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p><a href="mailto:sales@creativeidea-eg.com">sales@creativeidea-eg.com</a></p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">Newsletter</h5>
                                    <form name="contact_form" method="post" action="send_form_email.php" class="form-inline m-top-30">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" placeholder="Enter you Email" required>
                                            <button type="submit" value="Submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </form>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Made with
                            <i class="fa fa-heart"></i>
                            by
                            <a target="_blank" href="#">Creative Idea</a>
                            <?= date('Y')?>. All Rights Reserved
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
