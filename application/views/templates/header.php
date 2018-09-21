<!doctype html>
<html lang="zxx">
<head>
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109849540-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'GA_TRACKING_ID');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.min.js"></script>
        <script type="text/javascript" src="js/respond.min.js"></script>
	<![endif]-->

    <!-- Favicons Icon -->
    <link rel="icon" href="<?=base_url() ?>/images/icon.jpg" type="image/x-icon" />

    <title>Financial Brains</title>

    <!-- CSS Styles -->
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/mob_menu.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/owl.carousel.css" />

    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/rev/pe-icon-7-stroke.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/rev/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/rev/settings.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/rev/layers.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/rev/navigation.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/rev/rev_responsive.css" />

    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/style.css" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:800,500%7CLato:400,300,400italic,700,700italic,300italic,900italic,900,100,100italic%7CRoboto:400,500,600' rel='stylesheet' type='text/css' />

</head>

<body id="home" class="cms_index">
	<!-- Header Start -->
    <header>
    	<nav>
            <div class="container">
                <div id="navbar" class="navbar navbar-default">
                    <div class="navbar-header col-md-2 col-sm-4 col-xs-4">
                        <a class="navbar-brand trigger" href="<?=base_url() ?>" title="FinancialBrains"><img alt="Logo" src="<?=base_url() . "images/logo_bk.jpg"?>"></a>
                    </div>
                    <div class="col-md-9 col-sm-7 col-xs-7 pull-xs-right">
                    	<!-- Mobile Menu Start -->
                        <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger visible-sm visible-xs"><i class="fa fa-bars"></i></button>
                            <ul class="dl-menu">
                            	<li>
                                    <h5 class="sp_module_title">Financial Brains</h5>
                                </li>
                                <li>
                                    <a href="<?=base_url() . "home" ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?=base_url() ?>courses/1">Courses</a>
                                    <ul class="dl-submenu">

                                        <li><a href="<?=base_url() ?>courses/1">Course List</a></li>
                                        <li><a href="<?=base_url() ?>/#">Course Single</a>
                                            <ul class="dl-submenu">

                                              <li><a href="<?=base_url() ?>course_dtl/1">CFA Level 1</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/13">CFA Level 2</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/33">CFA Level 3</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/4">CMA Part 1</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/10">CMA Part 2</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/34">IFRS Deploma</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/5">Financial Modelling</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/41">Financial Statement Analysis</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a class="trigger" href="<?=base_url() ?>instructors/1">Instructors</a></li>
                                <li><a class="trigger" href="<?=base_url() ?>contactus">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- Mobile Menu End -->

                        <div class="main_menu_wrap">
                            <ul class="main_menu">
                                <li>
                                  <a class="trigger" href="<?=base_url() ?>index.html">Home </a>
                                </li>
                                <li>
                                  <a href="<?=base_url() ?>courses/1">Courses<i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                              <li><a>CFA<i class="fa fa-angle-right"></i></a>
                                                <ul class="sub_menu">
                                                  <li><a href="<?=base_url() ?>course_dtl/1">CFA Level 1</a></li>
                                                  <li><a href="<?=base_url() ?>course_dtl/13">CFA Level 2</a></li>
                                                  <li><a href="<?=base_url() ?>course_dtl/33">CFA Level 3</a></li>
                                                </ul>
                                              </li>
                                              <li><a>CMA<i class="fa fa-angle-right"></i></a>
                                                <ul class='sub_menu'>
                                                  <li><a href="<?=base_url() ?>course_dtl/4">CMA Part 1</a></li>
                                                  <li><a href="<?=base_url() ?>course_dtl/10">CMA Part 2</a></li>
                                                </ul>
                                                </li>
                                              <li><a href="<?=base_url() ?>course_dtl/34">IFRS Deploma</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/5">Financial Modelling</a></li>
                                              <li><a href="<?=base_url() ?>course_dtl/41">Financial Statement Analysis</a></li>
                                          </ul>
                                        </li>
                                <li><a class="trigger" href="<?=base_url() ?>instructors/1">Instructors</a></li>
                                <li><a class="trigger" href="<?=base_url() ?>contactus">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->
