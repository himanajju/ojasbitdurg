
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>OJAS 2017 | BIT-DURG</title>
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/images/favicon.ico"); ?>">

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url("assets/frontend/css/bootstrap.min.css"); ?>" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="<?php echo base_url("assets/frontend/css/ojas.min.css"); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php //echo base_url("assets/frontend/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url("assets/frontend/css/animate.css"); ?>">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/frontend/css/normalize.css"); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/frontend/css/component.css"); ?>" />
<!--        <link rel="stylesheet" type="text/css" href="<?php //echo base_url("assets/frontend/css/loader.css"); ?>" />-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


        <style type="text/css">

            .view {
                background: #222;
                overflow: hidden;
                width: 100%;
                height: 100%;
                position: absolute;
                top: -50px;
                left: 0;
                right: 0;
                bottom: 0;
                -webkit-perspective: 400;
                perspective: 400;
            }

            .plane {
                width: 120px;
                height: 120px;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            .plane.main {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                -webkit-transform: rotateX(60deg) rotateZ(-30deg);
                transform: rotateX(60deg) rotateZ(-30deg);
                -webkit-animation: rotate 20s infinite linear;
                animation: rotate 20s infinite linear;
            }
            .plane.main .circle {
                width: 120px;
                height: 120px;
                position: absolute;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
                border-radius: 100%;
                box-sizing: border-box;
                box-shadow: 0 0 60px crimson, inset 0 0 60px crimson;
            }
            .plane.main .circle::before, .plane.main .circle::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                width: 10%;
                height: 10%;
                border-radius: 100%;
                background: crimson;
                box-sizing: border-box;
                box-shadow: 0 0 60px 2px crimson;
            }
            .plane.main .circle::before {
                -webkit-transform: translateZ(-90px);
                transform: translateZ(-90px);
            }
            .plane.main .circle::after {
                -webkit-transform: translateZ(90px);
                transform: translateZ(90px);
            }
            .plane.main .circle:nth-child(1) {
                -webkit-transform: rotateZ(72deg) rotateX(63.435deg);
                transform: rotateZ(72deg) rotateX(63.435deg);
            }
            .plane.main .circle:nth-child(2) {
                -webkit-transform: rotateZ(144deg) rotateX(63.435deg);
                transform: rotateZ(144deg) rotateX(63.435deg);
            }
            .plane.main .circle:nth-child(3) {
                -webkit-transform: rotateZ(216deg) rotateX(63.435deg);
                transform: rotateZ(216deg) rotateX(63.435deg);
            }
            .plane.main .circle:nth-child(4) {
                -webkit-transform: rotateZ(288deg) rotateX(63.435deg);
                transform: rotateZ(288deg) rotateX(63.435deg);
            }
            .plane.main .circle:nth-child(5) {
                -webkit-transform: rotateZ(360deg) rotateX(63.435deg);
                transform: rotateZ(360deg) rotateX(63.435deg);
            }

            @-webkit-keyframes rotate {
                0% {
                    -webkit-transform: rotateX(0) rotateY(0) rotateZ(0);
                    transform: rotateX(0) rotateY(0) rotateZ(0);
                }
                100% {
                    -webkit-transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
                    transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
                }
            }

            @keyframes rotate {
                0% {
                    -webkit-transform: rotateX(0) rotateY(0) rotateZ(0);
                    transform: rotateX(0) rotateY(0) rotateZ(0);
                }
                100% {
                    -webkit-transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
                    transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
                }
            }

            .loader {
                position: fixed;
                left: 0px;
                top: 0px;
                margin: 0px;
                padding: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url('<?php echo base_url("assets/images/loader.gif"); ?>') 50% 50% no-repeat rgb(249,249,249);
                background-position: center;
                background-size: 70px;
            /*    background-size: contain*/
            }

        </style>
    </head>

    <body id="page-top" class="index">
        <div class="loader"></div>
        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#page-top">OJAS 2K17</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Events</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">About Us</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Contact</a>
                        </li>
                        <?php if(!isset($userdata)){ ?>
                            <li class="page-scroll">
                                <a href="<?php echo base_url("login"); ?>">Login</a>
                            </li>
                            <li class="page-scroll">
                                <a href="<?php echo base_url("register"); ?>">Register</a>
                            </li>
                        <?php }else{ ?>
                            <li class="page-scroll">
                                <a href="!#"><i class="fa fa-user"></i> Hello, <?php $name = explode(' ',$userdata['name']); echo $name[0];  ?></a>
                            </li>
                            <li class="page-scroll">
                                <a href="<?php echo base_url("logout"); ?>"><i class="fa fa-lock"></i> Logout</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- Header -->
        <header class="main-section">
            <div class="container-fluid demo-1">
                <div class="row">
                    <div class="content">
                        <div id="large-header" class="large-header">
                            <canvas id="demo-canvas"></canvas>
                            <div class="main-title">
                                <span style="font-weight: 700;">OJAS </span><span class="thin">2K17</span><br>
                                <span class="fadeInUp"><h4 class="subtitle">A Tech &amp; Cultural Fest Presented By Bhilai Institute of Technology - Durg</h4></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

            <!-- Portfolio Grid Section -->
            <section id="portfolio" class="main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Events</h2>
                            <hr class="star-primary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                              <img src="<?php echo base_url("assets/images/needforspeed.png"); ?>" class="img-responsive" alt="Need for Speed" title="Need for Speed" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/counter_strike.png"); ?>" class="img-responsive" alt="Counter Strike" title="Coounter Strike" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/badminton.png"); ?>" class="img-responsive" alt="Badminton" title="Badminton" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn" >
                            <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/rocket.png"); ?>" class="img-responsive" alt="HYDRAULIC BOTTLE ROCKET" title="HYDRAULIC BOTTLE ROCKET" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/painting.png"); ?>" class="img-responsive" alt="Painting" title="Painting" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/popsilink.png"); ?>" class="img-responsive" alt="Pop Si Link" title="Pop Si Link" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/quiz.png"); ?>" class="img-responsive" alt="Quiz" title="Quiz" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/rangoli.png"); ?>" class="img-responsive" alt="Rangoli" title="Rangoli" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/singing.png"); ?>" class="img-responsive" alt="Singing" title="Singing" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/cricket.png"); ?>" class="img-responsive" title="Cricket" alt="Cricket">
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/chess.png"); ?>" class="img-responsive" alt="Chess" title="Chess" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/tabletennis.png"); ?>" class="img-responsive" alt="Table Tennis" title="Table Tennis" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal13" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/football.png"); ?>" class="img-responsive" alt="Football" title="Football" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal14" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/robosoccer.png"); ?>" class="img-responsive" alt="Robo Soccer" title="Robo Soccer" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item wow bounceIn">
                            <a href="#portfolioModal15" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/volley.png"); ?>" class="img-responsive" alt="Volleyball" title="Volleyball" />
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item">
                            <a href="#portfolioModal17" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                 <img src="<?php echo base_url("assets/images/informals.png"); ?>" class="img-responsive img-centered" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item">
                            <a href="#portfolioModal16" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/foj.png"); ?>" class="img-responsive img-centered" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item">
                            <a href="#portfolioModal19" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/sparx.png"); ?>" class="img-responsive img-centered" alt=""> 
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item">
                            <a href="!#" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item">
                            <a href="#portfolioModal18" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?php echo base_url("assets/images/paper.png"); ?>" class="img-responsive img-centered" alt=""> 
                            </a>
                        </div>
                        <div class="col-sm-4 portfolio-item">
                            <a href="!#" class="portfolio-link" data-toggle="modal">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div>        
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section class="success main-section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>About</h2>
                            <hr class="star-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <p>On behalf of Bhilai Institute of Technology, Durg as the host, it gives us great pleasure to introduce you to our annual Techno-Cultural-Sports fest – Ojas’17. Being pioneer in providing excellent engineers, since last 30 years to central India, Bhilai Institute of Technology has always provided its students with an opportunity to take shapes as an all-rounder individual through organizing such events.</p>

                            <p>BIT – Durg has been an epitome of success, glory and excellence in the field of technical education for the past 30 years.  For the seven years “Ojas” has strived and succeeded in showing the excellence of the students of BIT – Durg.  Ojas involves a series of highly competitive cultural, technical and sports events. It also includes informal games and special performances.</p>

                            <p>Since its inception, B.I.T., Durg has experience in hosting events which brings students together to participate in the celebration of knowledge and creative extravagance along with experts from fields of academic and industry.</p>

                            <p>OJAS ’17 being one of its kinds has an excellent fusion of technical, cultural and sports events and for the first time ever we are hosting a Book Fair as an integral part of the fest. The fest will be held from 29th-30th March, 2017. We seek your help and support in making B.I.T. Durg’s premiere Book Fair a successful event. Your presence will be a valuable addition to Ojas.</p>

                            <p>This exhibition aims to be beneficial for students by catering to their literary interests.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Get In Touch With Us</h2>
                            <hr class="star-primary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Message</label>
                                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <br>
                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-2"><br>
                                        <button type="submit" class="btn btn-success btn-lg">Send</button>
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><h4 class="follow_us">Follow Us On</h4></li>
                                        <li>
                                            <a href="https://www.facebook.com/ojasbitdurg/" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section style="padding: 0px">
                <div class="container-fluid">
                    <div class="row">
                        <div id="googleMap" style="width:100%;height:400px;"></div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="text-center">
                <div class="footer-below">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                © 2017 Copyright • All Rights Reserved   •<a href="<?php echo base_url(); ?>" class="white-text bold"> Ojas2017</a> <br>
                                <div class="text-center">Made with <i class="fa fa-heart text-danger"></i> By Shubham Sahu, Akshay Shukla, Himanshu Patel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
            <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
                <a class="btn btn-primary" href="#page-top">
                    <i class="fa fa-chevron-up"></i>
                </a>
            </div>

            <!-- Portfolio Modals -->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>NEED FOR SPEED(MOST WANTED)</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/needforspeed.png"); ?>" class="img-responsive img-centered" alt="Need for Speed" title="Need for Speed" />
                                    <div class="content">
                                        <div class="row">
                                        <div class="col-md-12">
                                            <ul style="list-style:none;">
                                                <li>COMPETITION METHOD - 4 PLAYERS</li>
                                                <li>No. OF LAPS = 3</li>
                                                <li>FIRST DAY - PRELIMS</li>
                                                <li>SECOND DAY - MAIN TOURNAMENT
</li> 
                                            </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <ul style="list-style:none;"><li><strong>RULES FOR PRELIMS</strong><ul><li>GAME TYPE- CIRCUIT,SPRINT</li><li>
CIRCUIT IS OF 2 ROUNDS</li><li>
PLAYER GETTING FIRST POSITION QUALIFIES FOR NEXT ROUND.
                                                </li></ul></li>
                                                <li>
                                                <strong>
                                                  RULES FOR TOURNAMENT  </strong>
                                                    <ul>
                                                    <li>TOURNAMENT WILL BE KNOCKOUT.</li><li>
PLAYER WHO WINS FIRST STAGE MATCH QUALIFIES FOR NEXT STAGE.</li><li>
NO MATCHES FOR 3RD PLACE.
</li>
                                                    </ul>
                                                
                                                </li>
                                                <li>
                                                <strong>GAME SETTINGS</strong><ul><li>
                                                    COURSES- COURSE WILL BE DECIDED BY GAME ADMINISTRATOR.</li><li>
ALL CARS AVAILABLE.
                                                    </li></ul>
                                                </li>
                                                <li>
                                                <strong>RACE MODE OPTIONS</strong>
                                                <ul>
                                                    <li>
                                                        NITROUS – ON</li><li>
COLLISION DETECTION - ON</li><li>
PERFORMANCE MATCHING - OFF</li><li>
UNITS - PLAYER’S OWN DISCRETION.</li>               </ul>
                                                </li>
                                                <li><strong>PLAYER MODE OPTIONS</strong>
                                                <ul>
                                                <li>GAME MOMENT CAMERA - OFF</li><li>
                                                    CAR DAMAGE - OFF</li><li>
REAR VIEW MIRROR - PLAYER’S OWN DISCRETION.
</li>
                                                </ul></li>
                                                <li>
                                                <strong>GENERAL RULES</strong>
                                                    <ul>
                                                    <li>
                                                        PLAYERS WILL BEE PROVIDED WITH STANDARD KEYBOARDS AND MOUSE, IF ANY PLAYER DESIRES TO USE HIS OWN CONTROLLER OR STEERING WHEEL IS ALLOWED.</li><li>
MAXIMIUM OF 2 WARNNGS WILL BE GIVEN AFTER WHICH THE PLAYER WILL BE DISQUALIFIED.</li><li>
USE OF ANY CHEAT CODES.</li><li>
INTENTIONAL DISCONNECTION.

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            </div>
                                        </div> 
                                      <ul>
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("1", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                            <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="1"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                          
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i>Participated</a>&nbsp;&nbsp;
                                          <?php 
                                                }
                                            }else{
                                            ?>
                                                
                                                   <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                          
                                            <?php } ?>
                                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>COUNTER STRIKE</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/counter_strike.png"); ?>" class="img-responsive img-centered" alt="Counter Strike" title="Coounter Strike" />
                                    <div class="content">
                                        <div class="row">
                                        <div class="col-md-12">
                                            <ul style="list-style:none;">
                                            <li>
                                               <strong>RULES:-</strong>
                                                <ul>
                                                <li>
                                                    Software which will be used --- Counter strike Global offensive.</li><li>
	Team of 5 Members.
</li><li>	Each round on a map is of 2 minutes.
</li><li>	To select CT or T there will be  a ‘knife round’.
</li><li>	There will be a total of 15 rounds in a map.
</li><li>	Teams will swap sides after half time.
</li><li>	Team with highest rounds won will be the winner in that particular match.
</li><li>	Personal mouse are allowed.
</li><li>	Headphones won’t be provided.Particpants should bring their own.

                                                    
                                                    </li>
                                                </ul>
                                                </li>
                                                <li>
                                                <strong>DISQUALIFICATION :-</strong>
                                                    <ul>
                                                    <li>Using Cheat codes and other means of cheating are strictly prohibited.</li><li>
	If anyone caught using inappropriate means(cheats,tampering instruments etc), the team will be disqualified.
</li><li>	If anyone found disobeying the decided rules, then his team will be disqualified.
</li><li>	If any hardware software anomaly occurs during the game, the final decision will be taken by the organising committee or instructor present there.
</li>
                                                    </ul>
                                                </li>
                                                <li><strong>MAPS:-	</strong>
                                                <ul>
                                                    <li>Knockout round – ‘aim_map’
                                                    </li><li>	Quarter finals/Semi finals – ‘de_dust 2’
</li><li>	Finals – ‘de_dust 2’ ; ‘de_cache’ ; ‘de_mirage’ (best of three will be the winner)
</li>
                                                    </ul></li>
                                            <li><i>	The Teams qualified from knockout will face matches to quarter finals and then( if qualified ) to semi finals and at last two teams will be at finals</i></li>
                                                <li>
                                                <strong>EQUIPMENTS:</strong>
                                                    <ul>
                                                    <li>
        	22 to 24 computers 
                                                        <ul>
                                                        <li>
                                                        4 teams will be entertained at a time, requires 20 systems. </li><li>2 computers for server.
                                                            </li><li> spare computers(extra arrangements)
    </li></ul></li><li>Connectivity of 24 computers through LAN.</li><li>extra LAN cables.</li><li>24 mouse pads.                                         
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                <strong>
                                                    REQUIREMENTS:</strong><ul>
                                                    <li>Registration desk - 2
                                                    </li><li>	Speakers – 2
</li><li>	amplifier -1
</li><li>	Mic – 2
</li><li>	Projectors -2
</li><li>	Banners, posters, flex etc

                                                    
                                                    </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("2", $this->session->userdata('userData')['eventData'])){
                                            ?>      
                                                    
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="2"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                          <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                
                                                    <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;        
                                                
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>BADMINTON</h2>
                                <hr class="star-primary">
                                <img src="<?php echo base_url("assets/images/badminton.png"); ?>" class="img-responsive img-centered" alt="Badminton" title="Badminton" />
                                <div class="content">
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("3", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                                     
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="3"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                        
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i>Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>WATER BOTTLE ROCKET</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/rocket.png"); ?>" class="img-responsive img-centered" alt="HYDRAULIC BOTTLE ROCKET" title="HYDRAULIC BOTTLE ROCKET" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>INTRODUCTION:</h4>
                                            <p>
                                                The event <i>'Hydraulic Bottle Rocket'</i> is all about designing and constructing a single stage
                                                aerodynamically stable water bottle rocker.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>RULES</h4>
                                            <h5>General rules :</h5>
                                            <ul><li>
                                                Each team may have minimum 2 members or at maximum of 3 members. A
                                                team may consist of members from different colleges.</li><li>
                                                No person can be part of multiple teams.</li><li>
                                                Team will be provided with a T- shape launch frame (without any trigger
                                                mechanism) and a foot pump. A team mate will press the rocket on seal of the
                                                launch frame at the same time another member will pump air into the motor
                                                bottle us foot pump.</li><li>
                                                Participant will have to hold the rocket from bottom of motor bottle near the
                                                nozzle, while launch (hold with your hand).</li><li>
                                                Participants can use gloves to increase the grip. Use of any type of clamping
                                                device is strictly prohibited.</li><li>
                                                Participants are advised to be present with 2 rockets (of same design) in each
                                                round , as a spare in case of any accidental failure.</li><li>
                                                Participants are not allowed to damage the launch frame or arena in any way
                                                possible. Otherwise they will be disqualified.</li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Rocket Specifications:</h5>
                                            <ul>
                                                <li>
                                                    Rocket should be solely powered by water jet using air as compressing fluid.</li><li>
                                                Motor rocket should be made of 2 ltr. Soda bottle with opening of 22mm.</li><li>
                                                Air + Water volume in the motor bottle should not exceed 2 ltr. In any way
                                                Rocket should not contain any electrically powered system for pushing the
                                                propellant (in this case water).</li><li>
                                                A minimum 2 inch of distance from the neck end of motor bottle should be left
                                                open i.e free from any designs that can hamper the participants hold over
                                                rocket during launch process.</li><li>
                                                Fins brackets or any attachments to the rocket must be only self made and not
                                                readily purchased from market.
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Round 1 :</h4>
                                            <h5>Arena :</h5>
                                            <p>Arena will be a 15 meter wide strip, with a stretch of 90 meters, starting, 30
                                                meter from launch pad in the direction of launch.</p>
                                            <h5>Rules :</h5>
                                            <ul>
                                                <li>Each team will be given only 2 chances for launch and third chance will be provided only if
                                                    rocket hits the ground posterior to 90 meter stretch out in 1 or both of previous launch
                                                    (conditioned , team must have a rocket for launch at that instant).</li><li>
                                                In this round you will have to launch the rocket obliquely (trajectory angle can be
                                                manipulated manually).</li><li>
                                                Projection of distance between launch pad and the touch-down point , on the base line
                                                passing through the middle of 20 meter wide belt.</li><li>
                                                Every rocket must cross a minimum cut off range of 30 meter otherwise , launch will be
                                                declared as a fooul attempt and no points will be rewarded for the flight.</li><li>
                                                Rocket should touch the ground within 15 meter wide belt .( bonus or negative scores will
                                                be registered as per)</li><li>
                                                Teams will be judged on the basis of points they have scored , in this round.</li><li>
                                                Top 20 teams of this round will qualify for final decisive round.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Scoring</h4>
                                            <p>
                                                D -> Shadow distance between the rocket touch-down and launch pad , on base line.<br>
                                                N1 ->Number of attempts when rocket lands inside the touch-down belt.<br>
                                                N2 -> Number of attempts when rocket lands outside the touch-down belt.<br><b>
                                                Total Score (S) = 10*(D) + 5*(N1) - 5*(N2).</b>
                                            </p>
                                        </div>
                                    </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("4", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                                     
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="4"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                          
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>PAINTING</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/painting.png"); ?>" class="img-responsive img-centered" alt="Painting" title="Painting" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>
                                                PAINTING :-
                                            </strong>
                                            <ul><li>Topic will be announced on the spot.</li><li>
                                                The drawing should be drawn in 1/4th chart paper.
                                                </li><li>Items like colours and other requirements are to be brought by the participants themselves.
</li><li> Time allotted is 1hr 30min.
</li><li> Texts are not allowed.
</li><li> Sketching is not allowed.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>Judgement criteria:-</strong>
                                            <ul>
                                                <li>Utilisation of space.</li><li>
                                                Time management.
                                                </li><li> Expression of idea/clarity of idea.
                                                </li><li> Neatness
                                                </li><li> Originality
                                                </li><li>Creativity
                                                </li><li> General impression/ presentation.</li>
                                            </ul>
                                        </div>

                                    </div>
                                    
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("5", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                          
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="5"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>POP-SI-LINK</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/popsilink.png"); ?>" class="img-responsive img-centered" alt="Pop Si Link" title="Pop Si Link" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>About :</h4>
                                            <p>Relieve your childhood memories by crafting a pop-sicle (ice-cream) stick bridge with some conceptual knowledge of framework. Student will design & construct a model bridge that will carry a maximum load while using a few craft sticks; stressing neatness, craftsmanship, and creativity.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Rules for Bridge :</h4>
                                            <ul>
                                                <li>
                                                    Participants have to prepare the structure and bring it to the competition.
                                                </li><li>  Ice-cream sticks of standard dimensions (approx. 12 X 1.2 X 0.2cm), will be entrained.
</li><li> There is no limitation to number of ice-cream sticks used. But, weight of the structure not more than
1.5 kg.
</li><li> The weight of the structure would be measured for scoring point of view.
</li><li> Permitted glues are – fevicol (MR) or (SH).
</li><li> Use of any other glues like M-seal,Fevikwik are strictly prohibited.
</li><li> Use of COTTON threads, PERMITTED BUT, wire and paints is prohibited.
</li><li> Participants must check the quality or type of threads before implementation in model by organizing
member.
</li><li> The sticks can be glued in any way or in any shape.
</li><li> The structure should have conceptual logic of framework.
</li><li> Loading will be done at the center of lower span of bridge.
</li><li> Using foreign material (even found in possession with teams) would lead to direct disqualification.                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>General constraints:</h4>
                                            <ul>
                                                <li>
                                                    Length of bridge = 130 cm.
                                                </li><li> Clear span of the bridge(center to center distance between supports/pylons)= 110-120 cm.
                                                </li><li> Height of the bridge= ranges between
</li><li> Thickness of deck= ranges between 1
</li><li> Width of deck=ranges between 10
</li><li> If any team exceeds or does not fulfill the criteria for <b>length, span, height of the structure,</b> it will lead to disqualification straightaway.
</li><li> There should be only two supports or two pylons are allowed.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="<?php echo base_url("assets/images/pop_si_link_1.png"); ?>" class="img-responsive img-centered"  />
                                    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Model testing procedure:</h4>
                                            <img src="<?php echo base_url("assets/images/pop_si_link_2.png"); ?>" class="img-responsive img-centered"  />
                                      </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <h4>Cables arrangement (cotton threads):</h4><ul>
                                        <li>	Participants may use any type of arrangement.
                                        </li>
                                        </ul>
                                        <img src="<?php echo base_url("assets/images/pop_si_link_3.png"); ?>" class="img-responsive img-centered"  />
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <h4>Dimension :</h4>                                        <img src="<?php echo base_url("assets/images/pop_si_link_4.png"); ?>" class="img-responsive img-centered"  />

                                        </div></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Soring :</h4>
                                            <ul>
                                               <li> Scoring will be done on following basis:<ul><li>
                                                Weight of the structure.</li><li>
                                                Load taken by the structure.
                                                   </li><li> Design of the framework.</li></ul></li>
                                            </ul>
                                            <img src="<?php echo base_url("assets/images/pop_si_link_5.png"); ?>" class="img-responsive img-centered"  />

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Team specifications:</h4>
                                            <ul>
                                                <li>A maximum of 4 members are permitted in a team. Students from different institutions can form a team.
                                                </li><li> Eligibility: All students with valid student Id card from their respective colleges are allowed to participate.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>General rules:</h4>
                                            <ul><li>
                                                Teams must adhere to healthy spirit of competition.
                                                </li><li> Judges have the right to disqualify any team that indulge in misconduct and violate rules.
                                                </li><li> Judges decision will be final and binding on all.
                                                </li><li> The organizers reserve all right to change any or all of the rules as they deem fit. 
                                                </li></ul>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12"><div class="table-responsive">
  <table class="table">
    <tr><td rowspan="2">Teacher in-charge:   </td><td colspan="2">Mr. Tushar Saxena</td></tr>
      <tr><td colspan="2">Mr. Hitesh Sharma</td></tr>
      <tr><td>Student head:</td><td>Abhilash Kumar</td><td>(9755794134)</td></tr>
      <tr><td rowspan="4">Student Members:</td><td>1.	 Vikram singh</td><td>(3RD YEAR/8109631202)</td></tr>
      <tr><td>2. Samiksha Jaiswal  </td><td>      (3RD YEAR STUDENT)</td>
      </tr>
      <tr><td>3.         Tarun Singh Rajput   </td><td>  (2RD YEAR/7354471946)</td></tr>
      <tr><td>4.  Tarika Manhare  </td><td>  (2RD YEAR STUDENT)</td></tr>
  </table>
</div>
                                        </div></div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("6", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                          
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="6"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>Quiz</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/quiz.png"); ?>" class="img-responsive img-centered" alt="Quiz" title="Quiz" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="main-ul">
                                                <li><strong>
                                                    Round - 1
                                                    </strong>
                                                    <ul><li>
                                                        Pen & paper round
                                                        <ul><li> question can be asked from any random topic like G.K, Logic related,
                                                            current affairs etc.</li><li>Two person will be registered as one team and for 1st round only one will appear for the test.</li><li>Cut off for the first round will be on the basis of number of teams paticipating{on spot}
                                                            </li>
                                                        </ul>
                                                        </li></ul>
                                                </li>
                                                <li>
                                                    <strong>Round - 2 </strong>
                                                    <ul>
                                                        <li>
                                                            Audio visual round<ul>
                                                            <li>In this round both member of the team will participate.</li><li>Round is based on
<ul><li>
                                                                logo quiz.
                                                            </li><li> Name of famous places.
                                                            </li><li> Quotes.
                                                            </li><li> Tv show/moies
                                                            </li></ul>
                                                        </li>
                                                    </ul>
                                                        </li></ul>
                                                </li><li>
                                                    <strong>Round - 3</strong>
                                                    <ul>
                                                        <li>
                                                            Buzzer round
                                                            <ul>
                                                                <li>
                                                                    Points will be given for right answer.
                                                                </li><li> Negative points for wrong answer.
                                                                </li><li> Time limit will be mentioned.
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                              <ul style="list-style:none;">
                                                    <?php 
                                                    if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                        if(!in_array("7", $this->session->userdata('userData')['eventData'])){
                                                    ?>
                                                        
                                                            
                                                                <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="7"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                            
                                                        <?php 
                                                        }else{
                                                         ?>
                                                            <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                                    <?php 
                                                        }
                                                    }else{
                                                    ?>
                                                        <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    <?php } ?>
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                              </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>RANGOLI</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/rangoli.png"); ?>" class="img-responsive img-centered" alt="Rangoli" title="Rangoli" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>Rules</h5>
                                            <ul>
                                                <li>Topic:- Social Awareness
                                                </li>
                                                <li>Area provided 2sq. feet.
                                                </li><li> Rangoli colours should be bought by the participants on their own
                                                </li><li> Time allotted is 2hrs.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Judgement criteria:-</h4>
                                            <ul>
                                                <li>Utilisation of space.</li><li>
                                                Time management.
                                                </li><li> Expression of idea/clarity of idea.
                                                </li><li> Neatness
                                                </li><li> Originality
                                                </li>
                                                Creativity
                                                <li> General impression/ presentation.</li>
                                            </ul>
                                        </div>

                                    </div>

                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("8", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                          
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="8"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>SINGING</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/singing.png"); ?>" class="img-responsive img-centered" alt="Singing" title="Singing" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>RULES FOR CONTESTS:-</h5>
                                            <ul>
                                                <li>Contest will be held in 3 Rounds.
                                                </li><li>	Round 1 and Round 2 will be held in Day1 & Round 3 will be held on Day 2.
</li><li>	Round 1 will be open i.e without any theme.
</li><li>	Round 2 will be theme based and it will be declared shortly.
</li><li>	Time duration for Round 1: <ul><li>
                                               Solo	- 2 minutes</li><li>
                                             	Duet	  - 2 minutes</li><li>
                                             	Group  - 3minutes
 </li>

                                            </ul></li><li>Every participant must bring their own OJAS ID with them, without OJAS ID the participant is not allowed to participate.
</li><li>  Judges’ decision will be final.
</li><li>  For Group Performance:- <ul><li>
                                              Maximum no. of participants = 8</li><li>
                                              	Minimum no. of participants = 4
                                                </li></ul>
                                                </li><li>Participants must bring their own Karaoke or Music Track (only in pen drive) in which they have to perform.  </li></ul>
                                        </div>
                                    </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("9", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="9"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                          <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>CRICKET</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/cricket.png"); ?>" class="img-responsive img-centered" alt="Cricket" title="Cricket" />
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("10", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="10"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>CHESS</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/chess.png"); ?>" class="img-responsive img-centered" alt="Chess" title="Chess" />
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("11", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                            
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="11"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>TABLE TENNIS</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/tabletennis.png"); ?>" class="img-responsive img-centered" alt="Table Tennis" title="Table Tennis" />
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("12", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="12"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>FOOTBALL</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/football.png"); ?>" class="img-responsive img-centered" alt="Football" title="Football" />
                                    <div class="row">
                                        <div class="col-md-12"></div>
                                    </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("13", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="13"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>ROBO SOCCER</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/robosoccer.png"); ?>" class="img-responsive img-centered" alt="Robo Soccer" title="Robo Soccer" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <strong>Problem Statement : </strong>Design a robot which plays soccer. The robot would compete against
opponent robot in 1 on 1 match.
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <h5>ROBOT :</h5>
                                        <ul><li>
                                        Each team will have to defend the goal on its side as well as score the goal on the
opponent’s side
                                            </li><li> Each team would consist of 3 members at maximum.
</li><li> Dimensions of the robot should not exceed 30cm x 30 cm x 30cm (L x B x H).
</li><li> The weight limit of the robot for this competition is 3 kg.
</li><li> Robot can be manually controlled or wireless as per convenience of the team.
</li><li> The power supply for the robot should not exceed 12V (DC), 6A. 220V AC would be
provided.
</li><li> Wire should be slack during the course of match. Wire length should be at least 5m.
</li><li> The robots are not allowed to use the grippers or actuations which are intended to harm
the opponent team’s robot.
</li><li> Lego kits are strictly prohibited.    
                                            
                                            </li></ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>BALL :</h5>
                                            <ul>
                                            <li>Standard tennis ball would be used.</li>
                                            </ul>
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>RULES :</h5>
                                            <ul>
                                            <li>
                                                One team would consist of only one robot.
                                                </li><li> No changes in the robot would be entertained after the registration.
</li><li> One goal would result in one point and any foul committed, would result in deduction of
points.
</li><li> Robot should not be immobile in the arena for more than 5 seconds.
</li><li> If a robot enters the D of the opponent, foul would be committed.
</li><li> Two fouls would result in one penalty, where the opponent is allowed to shoot from a
penalty point.
</li><li> Scoring would be done on the basis of scoring formula.
</li><li> The robot should not damage the arena by any means.
</li><li> In case the wires of the robots are tangled for more than 20 seconds, the robots will
have to kick off again at the order of the referee.
</li><li> A team is allowed to take 2 time outs of 1min each (in case of any technical failure only).
</li><li> All the decisions made by the event organizers would be final.
                                                </li>
                                            </ul>
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>ROUND 1 :
                                            <ul><li>
                                                The total time duration for the match will be of 2+2 minutes, with a break of 1.5 minutes.
                                                </li><li> In case of a tie, penalty shoot outs will be given.
</li><li> Team scoring more number of goals will be the winner.
</li><li> From all the winners, only 8 teams will be selected for the next round on the basis of
scoring formula.
                                                </li></ul></h5>
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>SCORING FORMULA:</strong> 10 x No. of goals - 5 x No. of fouls.
                                        </div>
                                        </div><div class="row">
                                        <div class="col-md-12">
                                            <h5>Quarter final:</h5>
                                            <ul><li>
                                                It will be a Knockout round.
                                                </li><li> The total time duration for the match will be of 2.5 +2.5 minutes, with a break of 2
minutes.
</li><li> Time duration for the time out will be same as given in round 1.
</li><li> Winners will qualify for the round 3.
                                                </li></ul>
                                        </div>
                                        </div><div class="row">
                                        <div class="col-md-12">
                                            <h5>Semi Final</h5>
                                            <ul><li>
                                                It will be also be a knockout round.
                                                </li><li> Rules will be same as Quarter final.
                                                </li></ul>
                                        </div>
                                        </div><div class="row">
                                        <div class="col-md-12">
                                            <h5>Final Match :</h5>
                                            <ul><li>Rules will be stated at the time of match.</li></ul>
                                        </div>
                                    </div>

                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("14", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                          
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="14"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>VOLLEYBALL</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/volley.png"); ?>" class="img-responsive img-centered" alt="Volleyball" title="Volleyball" />
                                    <div class="row">
                                        <div class="col-md-12"></div>
                                    </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("15", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                          
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="15"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>FACE OF OJAS</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/foj.png"); ?>" class="img-responsive img-centered" alt="">
                                    <div class="content row">
                                        <div class="row">
                                        <div class="col-md-12">
                                            
                                            </div></div>
                                  <div class="row">
                                        <div class="col-md-12">
                                            <h5>1st Round (Aptitude and GD)</h5><ul class="main-ul"><li>
                                            Aptitude test consisting of General Aptitude and Case Study questions regarding current affairs.</li><li>
                                            Participants passing the Aptitude test will have to sit in a Group Discussion where they’ll be presented by a topic. Selection will be on the basis of how they present their points.</li></ul>

                                            </div></div>
                                  <div class="row">
                                        <div class="col-md-12">
                                            <h5>2nd Round(Talent Round)</h5><ul class="main-ul"><li>
                                            Selective participants and Wild card entries from Facebook will be further moved on to present their Talent for 2-3 min.</li><li>
Top 12 students (6 Boys and 6 Girls) will be selected on the basis of their presentation in Talent Round
                                            </li></ul>
                                            </div></div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <h5>3rd Round (Final Round)</h5><ul class="main-ul">
                                            <li>This round consists of Ramp Walk and Talent rounds.</li>
                                            </ul>
                                            </div></div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            Each participant will be judged on the basis of their Walk, Confidence, Elegance and Dressing Sense.<br><br>
(The Talent to be presented in final round must be a longer verse of the one performed in 2nd Round).<br><br>
Furthermore, the participants will be asked some questions by the judges as they (the Judges) feel fit to ask.<br><br>

                                            </div>
                                        </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("16", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                          
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="16"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                          <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>INFORMALS</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/informals.png"); ?>" class="img-responsive img-centered" alt="Volleyball" title="Volleyball" />
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">HUMAN TIC-TAC-TOE</h3>
                                            <p>It is a game played between two teams , X and O , who
take turns marking the spaces in 3*3 grid. The team
who succeeds in placing three of their players in a
horizontal , vertical , or diagonal row wins the game.</p>
                                            <h5>Rules :-</h5>
                                            <ul><li>
                                                Number of players in a team must be 4.
                                                </li><li> There is a toss for the first turn and winner of the
toss will be allotted one more member.
                                                </li></ul>
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">TUG OF WAR</h3>
                                            <p>Tug of war is a sports that directly puts two teams
against each other: teams pull on opposite ends of a
rope, with the goal being to bring the rope a certain
distance in one direction against the force of the
opposite team’s pull.
                                            </p>
                                            <h5>Rules :-</h5>
                                            <ul><li>
                                                Number of players in a team must be 5.
                                                </li><li> Decision of judge will be final.
</li><li> The center of rope should align with the
center marked on the ground.
</li><li> Each team is allowed two cautions before
getting disqualified.
                                                </li></ul>
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">Gully Cricket</h3>
                                            <p>
                                            Whilst loosely based upon the game of cricket, many
aspects are improvised: the playing ground, the rules,
the teams, and the equipments.
                                            </p>
                                            <h5>Rules :-</h5><ul>
                                            <li>
                                            Number of players in team must be 6.
                                            </li><li> In a team 2 girls are mandatory.
                                            </li><li> Match will be of 1 or 2 overs.
                                            </li></ul>
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">PILLOW FIGHT</h3>
                                            <p>A pillow fight is a common game in which they engage
in mock physical conflict, using pillow as weapon.</p>
                                            <h5>Rules :-</h5>
                                            <ul>
                                            <li>
                                                Game will be played by sitting on a bamboo stand.
                                                </li><li> If the pillow falls down then you will be
disqualified.
</li><li> If player falls down from the stand then he will be
disqualified.
                                                </li>
                                            </ul>
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">Treasure Hunt</h3>
                                            <p>Treasure hunt is one of many different type of games
with one or more players who try to find objects given
in the list.
                                            </p>
                                            <h5>Rules :-</h5>
                                            <ul>
                                            <li>
                                                A team should contain 3 members.
</li><li> Time limit will be fixed.
</li><li> You have to hunt the objects outside the
treasure hunt area.
                                                </li>
                                            </ul>
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">Attacking The Fort</h3>
                                            <p>A Game Like “Pittu Garam” Will Be Played Between
two Teams Where One Team Will Defend And Another
Will Attack And Vice-Versa. Defending Team Will
Defend A Fort Like Structure Made Up By Blocks
Between Inner And Outer Circle.</p>
                                            <h5>Rules  :-</h5>
                                            <ul><li>
                                                Team Of 2,3 or 4 members will be made.
                                                </li><li> One Team Will Defend The Blocks & Another Team
Will Hit Those With Balls Provided ,Till The Last
Block Is Out Of The Maze.
 </li><li> Chances Will Be Given To Both Teams
 </li><li> Time Limit Game And Team With Maximum No of
Blocks Hitted Will Win.
                                                </li></ul>
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">Catch The Ball
                                            </h3>
<p>A Game In Which One Member Will Be Blindfolded
And Throw 5 Balls Backward And The Rest Of
Member Will Collect Those In The Given Baskets .</p>
                                            <h5>Rules :-</h5><ul><li>
                                            A Team Of 3 or 4 members will be made.
                                            </li><li> Team With Maximum Numbers Of Balls Collected
Will Win.
                                            </li></ul>
                                    </div>
                                    </div><div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">Fill The Glass</h3>
                                            <p>A Game Played By Two Teams where Two Members
Will Juggle A Ball With Cardboard Parallely And Move
Order In Order To Fill That Ball In Basket.</p>
                                            <h5>Rules  :-</h5>
                                            <ul><li>
                                                A Group Of Two Will Form A Team.
</li><li> 3 Chances Will Be Given To Complete The Game.
</li><li> Time Limit Game And Team With Least Attempts
And Time will win
                                                </li></ul>
                                        </div>
                                    </div><div class="row">
                                        <div class="col-md-12">
                                        <h3 class="text-center">3 legged race</h3>
                                            <p>
                                            
                                            3 legged race involve two participants attempting to
compete a short sprint with the left leg of one runner
strapped to a right leg of another runner.
                                            </p>
                                            <h5>Rules :-</h5>
                                            <ul><li>
                                                If the knot gets untide then the participants will
have to start race from starting point.
                                                </li><li> There is no time limit: the pair who reaches the
finishing line first will win the race.
</li><li> If someone doesn’t follow the rule will get
disqualified immediately.
                                                </li></ul>
                                        </div>
                                    </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("17", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                          
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="17"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            
                                          <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal18" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>PAPER PRESENTATION</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/paper.png"); ?>" class="img-responsive img-centered" alt="Volleyball" title="Volleyball" />
                                    <div class="row">
                                        <div class="col-md-12">
                                        <H5>MAIN THEME</H5>
                                            <p>ADVANCEMENT AND CHALLENGES IN THE FIELD OF ENGINEERING TECHNOLOGY AND MANAGEMENT.</p>
                                            <h5>SUB-HEADS</h5>
                                            <ul><b>
                                            <li>SUPER CONDUCTORS
                                                </li><li>	GREEN ENERGY
                                                 </li><li>	COLONY ON MARS
                                                 </li><li>	NANOTECHNOLOGY
                                                </li><li>	JUST IN TIME MANUFACTURING
                                                </li><li>	ADVANCE CONSTRUCTION TECHNIQUES
                                                </li><li>	ROBOT IN RADIO ACTIVE ENVIRONMENT
                                                </li><li>	ADVANCED ENGINE FUEL
                                                </li><li>	ARTIFICIAL INTELLIGENCE
                                                </li><li>TIME TRAVELLING
                                                </li>
                                                </b>   </ul>
                                            <ul>
                                            <li>Topic will be given.
                                                </li><li>	Participants can be in group of at most <b>2</b> members.
                                                </li><li>	Participants should mail their abstract to the given incharge email ID before <b>23:59, 27 march 2017.</b>
                                                </li><li>	 Abstract should not be more than <b>150 words.</b>
</li><li>	Participants should maintain their registration ID and email IDs for all participants. Also mention the contact no. for reference.
                                                </li><li>	Participants will be shortlisted on the basis of the abstract and will have to submit their Powerpoint presentation by <b>28 march  2017</b> in hard copy or soft copy.
</li><li>	The full paper work should be submitted in the following format.<ul><b>
                                                <li>
                                	Abstract
</li><li>	Introduction (keep the introduction brief)
</li><li>	Suggestion
</li><li>	Result
</li><li>	Conclusion


                                                </li></b>
                                                </ul>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("18", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="18"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal19" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>SPARX</h2>
                                    <hr class="star-primary">
                                    <img src="<?php echo base_url("assets/images/sparx.png"); ?>" class="img-responsive img-centered" alt="Volleyball" title="Volleyball" />
                                    <div class="row">
                                        <div class="col-md-12">
                                        BIT Durg and OJAS'17 presents, the dance event (29 – 30 Mar)
This year SPARX will be conducted in two categories-
                                            <ol><li>Group (min 4 and max 10 members)
                                                </li><li>Solo or Duet
                                                </li></ol>
                                            Contestants can participate in both the categories but can opt for only one type in Category-2 (either Solo or Duet).
                                            <br><br>
                                            The event will be further conducted as-
                                            <ul class="main-ul"><li>
                                                DAY 1 (29 Mar)-<ul><li>
                                                Round 1 (2-3 min) - Freestyle </li><li>
                                                Round 2 (3-5 min)- Theme-based Surprise Round (Will be revealed one week prior to the commencement of the event) (Elimination Round).</li></ul></li><li>
DAY 2 (30 Mar)-<ul><li>
Round 3 (5-8 min) - Finale

                                                
                                                
                                                </li></ul></ul>
                                            <ul><li>
                                                Participants have to prepare their performance based on any theme or dance form of their choice (for Rounds 1 & 3).
                                                </li><li> Participants must give their audio clips in mp3 format (320 kbps), well in advance.
</li><li> Teams should have their unique group name.
</li><li> Team members must possess a valid college-id.
</li><li> Team members should be same in all the respective three rounds (No involvement or change old participants with new one is allowed).
</li><li> Any group or participant will not be eligible to take part in the competition if he is not able to fulfil above conditions.

                                                
                                                </li>
                                            
                                            </ul>
                                            So hurry up guys! Register yourself ASAP!!
                                        </div>
                                    </div>
                                      <ul style="list-style:none;">
                                            <?php 
                                            if($this->session->userdata('userData') != null && isset($this->session->userdata('userData')['eventData'])){
                                                if(!in_array("19", $this->session->userdata('userData')['eventData'])){
                                            ?>
                                          
                                                    
                                                        <a class="btn btn-sm btn-info participateBtn" id="participateBtn" data-eventid="19"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                                    
                                                <?php 
                                                }else{
                                                 ?>
                                                    <a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;
                                            <?php 
                                                }
                                            }else{
                                            ?>
                                                <a class="btn btn-sm btn-info" href="<?php echo base_url("login"); ?>"><i class="fa fa-plus"></i> Participate Now</a>&nbsp;&nbsp;
                                            <?php } ?>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    <!-- jQuery -->
    <script src="<?php echo base_url("assets/frontend/js/jquery.min.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("assets/frontend/js/bootstrap.min.js"); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url("assets/frontend/js/jquery.easing.min.js"); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url("assets/frontend/js/jqBootstrapValidation.js"); ?> "></script>
    <script src="<?php echo base_url("assets/frontend/js/contact_me.js");?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url("assets/frontend/js/ojas.min.js");?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    
    <script>
        new WOW().init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

    <script type="text/JavaScript">
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(21.1946, 81.2989),
                zoom:15,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({position:mapProp.center});
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4MejIndYv-uHawir_dojA_jpcWj6Qe90&callback=myMap"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            studentId = "<?php if(isset($userData)){ echo $userData['id'];  } ?>";
            $('a.participateBtn').on('click',function(e){
                if(confirm("Are you sure?")){
                    var elem = $(this);

                    var eventId = elem.data("eventid");
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('participate-for-event'); ?>',
                        data: "&studentId="+studentId+"&eventId="+eventId,
                        dataType: "json",
                        success: function (data) {
                            // the next thing you want to do 
                            console.log(data);
                            if(data.status == "200"){
                                elem.parent().html('<a class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Participated</a>&nbsp;&nbsp;');
                            }else{
                                alert("Illegal operation performed.");
                            }
                        }
                    });    
                }
            });
        });
    </script>
    <script src="<?php echo base_url("assets/frontend/js/bganimations/TweenLite.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/frontend/js/bganimations/EasePack.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/frontend/js/bganimations/rAF.js"); ?>"></script>
    <script src="<?php echo base_url("assets/frontend/js/bganimations/demo-1.js"); ?>"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
    </script>
  </body>
</html>
