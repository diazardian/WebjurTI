<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    <title>w e b j u r - T I</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- FontsOnline -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>

    <!-- StyleSheets -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- JavaScripts -->
    <script src="js/vendors/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- LOADER -->
<div id="loader">
    <div class="loader">
        <div class="position-center-center"> <img src="" alt="" >
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>
</div>

<!-- Page Wrapper -->
<div id="wrap">

    <!-- Top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="col-md-6">
                <ul class="row">
                    <li class="margin-right-20">
                        <p><i class="fa fa-envelope-o margin-right-10"></i>Info@Domain.com</p>
                    </li>
                    <li class="margin-right-20">
                        <p><i class="fa fa-phone margin-right-10"></i> +01 123 456 78</p>
                    </li>
                    <li>
                        <p><i class="fa fa-user margin-right-10"></i> Account</p>
                    </li>
                </ul>
            </div>

            <!-- Social Icon -->
            <div class="col-md-6 text-right social-top">
                <!-- Social Icon -->
                <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                    <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    include "header.php";
    ?>

    <!--======= SUB BANNER =========-->
    <section class="sub-banner bg-parallax" style="background:url(images/bg/about-bg-1.jpg) no-repeat">
        <div class="container">
            <div class="position-center-center">
                <h1>sarana prasarana</h1>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- PORTFOLIO -->
        <section class="portfolio port-wrap light-gray-bg padding-bottom-100 padding-top-100">
            <div class="container">

                <!-- Work Filter -->
                <ul class="portfolio-filter text-center margin-bottom-80">
                    <li><a class="active waves-effect waves-light" href="#." data-filter="*">all categories</a></li>
                    <li><a class="waves-effect waves-light" href="#." data-filter=".pf-branding-design">ruang kelas</a></li>
                    <li><a class="waves-effect waves-light" href="#." data-filter=".pf-photography">laboratorium</a></li>
                </ul>

                <!-- PORTFOLIO ITEMS -->
                <div class="items row col-3 with-space">

                    <!-- ITEM -->
                    <article class="portfolio-item pf-branding-design">
                        <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/sarpras/ruang%20kelas%202.jpg"> <a href="images/sarpras/ruang%20kelas%202.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                            <div class="portfolio-overlay style-2">
                                <div class="detail-info">
                                    <h3><a href="portfolio-single.html">Ruang Perkuliahan</a></h3>
                                    <span><a href="portfolio-single.html">Suasana dan Ruang Perkuliahan</a></span> </div>
                            </div>
                        </div>
                    </article>

                    <!-- ITEM -->
                    <article class="portfolio-item pf-photography pf-photography">
                        <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/sarpras/lab_rpl.jpg"> <a href="images/sarpras/lab_rpl.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                            <div class="portfolio-overlay style-2">
                                <div class="detail-info">
                                    <h3><a href="portfolio-single.html">Lab RPL</a></h3>
                                    <span><a href="portfolio-single.html">Laboratorium Rekayasa Perangkat Lunak</a></span> </div>
                            </div>
                        </div>
                    </article>

                    <!-- ITEM -->
                    <article class="portfolio-item pf-web-design pf-photography">
                        <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/sarpras/lab_jarkom.jpg"> <a href="images/sarpras/lab_jarkom.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                            <div class="portfolio-overlay style-2">
                                <div class="detail-info">
                                    <h3><a href="portfolio-single.html">Lab Jarkom</a></h3>
                                    <span><a href="portfolio-single.html">Laboratorium jaringan Komputer</a></span> </div>
                            </div>
                        </div>
                    </article>

                    <!-- ITEM -->
                    <article class="portfolio-item pf-web-design pf-photography">
                        <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/sarpras/lab_si.jpg"> <a href="images/sarpras/lab_si.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                            <div class="portfolio-overlay style-2">
                                <div class="detail-info">
                                    <h3><a href="portfolio-single.html">Lab SI</a></h3>
                                    <span><a href="portfolio-single.html">Laboratorium Sistem Informasi</a></span> </div>
                            </div>
                        </div>
                    </article>

                    <!-- ITEM -->
                    <article class="portfolio-item pf-web-design pf-photography">
                        <div class="portfolio-image"> <img class="img-responsive" alt="Open Imagination" src="images/sarpras/lab-mmk.jpg"> <a href="images/sarpras/lab-mmk.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios-search"></i></a>
                            <div class="portfolio-overlay style-2">
                                <div class="detail-info">
                                    <h3><a href="portfolio-single.html">Lab MMK</a></h3>
                                    <span><a href="portfolio-single.html">Laboratorium Multimedia Kreatif</a></span> </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
    <!-- End Content -->
    <?php
    include "footer.php";
    ?>
</div>
<!-- End Page Wrapper -->

<!-- JavaScripts -->
<script src="js/vendors/jquery/jquery.min.js"></script>
<script src="js/vendors/wow.min.js"></script>
<script src="js/vendors/bootstrap.min.js"></script>
<script src="js/vendors/materialize.min.js"></script>
<script src="js/vendors/own-menu.js"></script>
<script src="js/vendors/flexslider/jquery.flexslider-min.js"></script>
<script src="js/vendors/jquery.isotope.min.js"></script>
<script src="js/vendors/owl.carousel.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>