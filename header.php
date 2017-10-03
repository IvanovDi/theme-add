<?php
require_once "defines.php";
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Stylesheets
    ============================================= -->
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />-->
    <!--	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />-->
    <!--	<link rel="stylesheet" href="style.css" type="text/css" />-->
    <!--	<link rel="stylesheet" href="css/dark.css" type="text/css" />-->

    <!-- Travel Demo Specific Stylesheet -->
    <!--	<link rel="stylesheet" href="demos/travel/travel.css" type="text/css" />-->
    <!-- / -->

    <!--	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />-->
    <!--	<link rel="stylesheet" href="css/animate.css" type="text/css" />-->
    <!--	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />-->

    <!--	<link rel="stylesheet" href="css/responsive.css" type=	"text/css" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <?php wp_head(); ?>


    <!-- Document Title
    ============================================= -->
    <title>Детские лагеря | ADDRIAN</title>

</head <?php body_class(); ?>>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="transparent-topbar dark">

        <div class="container clearfix">

            <div class="col_half nobottommargin clearfix">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul>
                        <li><a href="index.html">Главная</a></li>
                        <li><a href="#">Все лагеря</a>
                            <ul>
                                <div class="spec-traingle"></div>
                                <li><a href="kiev.html" style="color: #fff !important; font-size: 11px;">Дневной лагерь в Киеве</a></li>
                                <li><a href="http://addrian.com.ua/camps/nikolaev-camp" style="color: #fff !important; font-size: 11px;">Дневной лагерь в Николаеве</a></li>
                                <li><a href="http://addrian.com.ua/camps/kherson-camp" style="color: #fff !important; font-size: 11px;">Дневной лагерь в Херсоне</a></li>
                                <li><a href="http://addrian.com.ua/camps/black-sea-camp" style="color: #fff !important; font-size: 11px;">Лагерь на Черном море</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="faqs.html"></a></li>
                        <li><a href="contact.html">Contact</a></li>-->

                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col_half fright col_last clearfix nobottommargin">

                <!-- Top Social
                ============================================= -->
                <div id="top-social">
                    <ul>
                        <li><img src="images/phone-ic/life.png"/><span class="ts-text" style="color: #25258e; font-family: 'Roboto', sans-serif; font-weight: 500; margin-right: 10px; margin-left: 4px;">093 453 16 23</span></li>
                        <li><img src="images/phone-ic/kiev.png"/><span class="ts-text" style="color: #25258e; font-family: 'Roboto', sans-serif; font-weight: 500; margin-right: 10px; margin-left: 4px;">068 333 28 71</span></li>
                        <li><img src="images/phone-ic/mts.png"/><span class="ts-text" style="color: #25258e; font-family: 'Roboto', sans-serif; font-weight: 500; margin-right: 10px; margin-left: 4px;">095 545 27 66</span></li>
                        <li style="width: 85px;"><div><a href="#cont" id="con" style="width: 85px !important; text-align: center;">Контакты</a></div></li>
                        <li style="width: 103px;"><div><a href="#bron" id="con1" style="text-align: center;">Бронирование</a></div></li>
                        <li><a href="https://vk.com/addrian_english_school" class="si-vk top-man-soc sup-class"><span class="ts-icon"><i class="icon-vk" style="color: #25258e;"></i></span><span class="ts-text" style="    position: relative; left: -3px;">Vkontakte</span></a></li>
                        <li><a href="https://www.facebook.com/addrianua/" class="si-facebook top-man-soc sup-class"><span class="ts-icon"><i class="icon-facebook" style="color: #25258e;"></i></span><span class="ts-text" style="    position: relative; left: -3px;">Facebook</span></a></li>
                        <li><a href="mailto:info@addrian.com.ua" class="si-email3 top-man-soc sup-class"><span class="ts-icon"><i class="icon-envelope-alt" style="color: #25258e;"></i></span><span class="ts-text">info@addrian.com.ua</span></a></li>
                    </ul>
                </div><!-- #top-social end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header dark " data-sticky-class="not-dark" data-responsive-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>


                <div id="logo">
                    <a href="<?php echo WP_SITEURL; ?>" class="standard-logo" data-dark-logo="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Canvas Logo"></a>
                    <a href="<?php echo WP_SITEURL; ?>" class="retina-logo" data-dark-logo="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Canvas Logo"></a>
                </div>

                <nav id="primary-menu" class="style-4">

                    <!--выводит меню и устанавливает критерии   -->
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul>%3$s</ul>',
                            'menu_class' => 'nav navbar-nav',
                            'depth' => 1,
                        ));
                    ?>
<!--                    <ul>-->
<!--                        <li class="current"><a href="#content"><div class="div_in_top"><i class="icon-user3"></i>О нас</div></a>	</li>-->
<!--                        <li><a href="#camps"><div class="div_in_top"><i class="icon-star2"></i>Лагеря</div></a></li>-->
<!--                        <li><a href="#team"><div class="div_in_top"><i class="icon-group"></i>Команда</div></a></li>-->
<!--                        <li><a href="#gall"><div class="div_in_top"><i class="icon-camera3"></i>Галерея</div></a></li>-->
<!--                        <li><a href="#testi"><div class="div_in_top"><i class="icon-chat-3"></i>Отзывы</div></a></li>-->
<!--                        <li><a href="#services"><div class="div_in_top"><i class="icon-calendar"></i>Даты и цены</div></a></li>-->
<!--                        <!--<li><a href="#"><div class="div_in_top"><i class="icon-blogger"></i>Блог</div></a></li>-->
<!--                    </ul>-->

                </nav>

            </div>

        </div>

    </header><!-- #header end -->