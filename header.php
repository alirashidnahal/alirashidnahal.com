<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />
    <meta name="title" content="<?php if (is_home()) {echo bloginfo('name');} elseif (is_404()) {echo 'صفحه مورد نظر یافت نشد';} elseif (is_category()){echo wp_title( '' );} elseif (is_search()) {echo 'نتایج جستجوی شما';} elseif ( is_day() || is_month() || is_year() ) {echo 'آرشیو';wp_title( '' );} else {echo wp_title( '' );}?>">
    <meta name="language" content="fa" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="document-type" content="Public" />
    <meta name="document-rating" content="General" />
    <meta name="resource-type" content="document" />
    <meta name="theme-color" content="#1f9cbd"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#1f9cbd">
    <meta name="msapplication-navbutton-color" content="#1f9cbd">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="copyright" content="<?php $copyYear = 2019; $curYear = date('Y'); echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');?>"/>
    <meta name="keywords" content="<?php if ( is_home() ) {echo "علی رشیدنهال، برنامه نویس، طراح وب، طراحی سایت، ali rashidnahal";} else {echo get_post_meta(get_the_ID(), 'keywords', true);} ?>"/>
    <meta name="description" content="<?php if ( is_home() ) {echo bloginfo('description');} else {echo get_post_meta(get_the_ID(), 'description', true);} ?>"/>
    <link rel="canonical" href="<?php if (is_home() ) {echo esc_url(home_url( '/' ));} else {echo the_permalink();} ?>"/>
    <link rel="alternate" hreflang="fa-IR" href="<?php echo esc_url(home_url( '/' ));?>" />
    <link rel="author" type="text/plain" href="<?php echo esc_url(home_url( '/' ));?>/humans.txt" />
    <link rel="manifest" href="<?php echo esc_url(home_url( '/' ));?>/manifest.json">
    <meta name="robots" content="all" />
    <base href="/">
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="<?php if (is_home()) {echo bloginfo('name');} elseif (is_404()) {echo 'صفحه مورد نظر یافت نشد';} elseif (is_category()){echo wp_title( '' );} elseif (is_search()) {echo 'نتایج جستجوی شما';} elseif ( is_day() || is_month() || is_year() ) {echo 'آرشیو';wp_title( '' );} else {echo wp_title( '' );}?>">
    <meta itemprop="description" content="<?php if ( is_home() ) {echo bloginfo('description');} else {echo get_post_meta(get_the_ID(), 'description', true);} ?>">
    <meta itemprop="image" content="<?php if ( is_home() ) {echo get_stylesheet_directory_uri() . '/assets/images/alirashidnahal-logo.jpg';} elseif ( has_post_thumbnail() ) {the_post_thumbnail_url();} else { echo get_stylesheet_directory_uri() . '/assets/images/alirashidnahal-logo.jpg';} ?>">
    <!-- Open Graph meta tags -->
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="<?php if (is_single()) {echo "article";} else {echo "website";} ?>"/>
    <meta property="og:url" content="<?php if ( is_home() ) {echo esc_url(home_url( '/' ));} else {echo the_permalink();} ?>"/>
    <meta property="og:site_name" content="<?php echo bloginfo('name');?>"/>
    <meta property="og:title" content="<?php if ( is_home() ) {echo bloginfo('name');} elseif ( is_category() ) { echo ''; wp_title( '' );} elseif ( is_day() || is_month() || is_year() ) {echo 'آرشیو'; wp_title( '' );} else {echo wp_title(); } ?>"/>
    <meta property="og:description" content="<?php if ( is_home() ) {echo bloginfo('description');} else {echo get_post_meta(get_the_ID(), 'description', true);} ?>"/>
    <meta property="og:image" content="<?php if ( is_home() ) {echo get_stylesheet_directory_uri() . '/assets/images/alirashidnahal-logo.jpg';} elseif ( has_post_thumbnail() ) {the_post_thumbnail_url();} else { echo get_stylesheet_directory_uri() . '/assets/images/alirashidnahal-logo.jpg';} ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1782">
    <meta property="og:image:height" content="1254">
    <meta property="og:image:alt" content="<?php if (is_home()) {echo bloginfo('name');} elseif (is_404()) {echo 'صفحه مورد نظر یافت نشد';} elseif (is_category()){echo wp_title( '' );} elseif (is_search()) {echo 'نتایج جستجوی شما';} elseif ( is_day() || is_month() || is_year() ) {echo 'آرشیو';wp_title( '' );} else {echo wp_title( '' );}?>" />
    <!-- twitter card meta tags -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@alirashidnahal"/>
    <meta name="twitter:url" content="<?php echo esc_url(home_url( '/' ));?>">
    <meta name="twitter:creator" content="Ali Rashidnahal"/>
    <meta name="twitter:description" content="<?php if ( is_home() ) {echo bloginfo('description');} else {echo get_post_meta(get_the_ID(), 'description', true);} ?>"/>
    <meta name="twitter:title" content="<?php if ( is_home() ) {echo bloginfo('name');} elseif ( is_category() ) { echo ''; wp_title( '' );} elseif ( is_day() || is_month() || is_year() ) {echo 'آرشیو'; wp_title( '' );} else {echo wp_title( '' ); } ?>"/>
    <meta name="twitter:image" content="<?php if (is_home()) {echo bloginfo('name');} elseif (is_404()) {echo 'صفحه مورد نظر یافت نشد';} elseif (is_category()){echo wp_title( '' );} elseif (is_search()) {echo 'نتایج جستجوی شما';} elseif ( is_day() || is_month() || is_year() ) {echo 'آرشیو';wp_title( '' );} else {echo wp_title( '' );}?>" />
    <meta name="twitter:image:width" content="1782">
    <meta name="twitter:image:height" content="1254">
    <!-- Add apple touch icons -->
    <link rel="icon" type="image/png" sizes="48x48" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-48.png">
    <link rel="icon" type="image/png" sizes="72x72" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-72.png">
    <link rel="icon" type="image/png" sizes="128x128" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-128.png">
    <link rel="icon" type="image/png" sizes="144x144" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-144.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-192.png">
    <link rel="apple-touch-icon" sizes="48x48" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-48.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-72.png">
    <link rel="apple-touch-icon" sizes="128x128" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-128.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-144.png">
    <link rel="apple-touch-icon" sizes="192x192" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/alirashidnahal-logo-192.png">

	<?php wp_head(); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S4T75K33HV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-S4T75K33HV');
    </script>

</head>
<body data-spy="scroll" data-target="#navigation" class="classy-resume-home">

<!-- header -->
<header id="header">

    <!-- Navigation -->
    <nav class="navigation">
        <div class="nav-open hidden-lg hidden-md">
            <i class="fa fa-bars"></i>
        </div><!-- //.nav-open -->
        <div class="nav-content">

            <div class="nav-list" id="navigation">
                <div class="nav-img"></div><!-- //.nav-img -->
                <ul class="nav list-unstyled" role="tablist">
                    <li>
                        <span> حالت تاریک:</span>
                        <label class="switch">
                            <input type="checkbox" id="dark" class="checkbox_check">
                            <span class="slider round"></span>
                        </label>
                    </li>
                    <li><a href="#profile"><i class="fa fa-user"></i> پیشخوان</a> </li>
                    <li><a href="#resume"><i class="fa fa-file"></i> رزومه کاری</a> </li>
                    <li><a href="#pricing"><i class="fa fa-map-signs"></i> تعرفه ها</a> </li>
                    <li><a href="#blog"><i class="fa fa-pencil"></i> وبلاگم</a> </li>
                    <li><a href="#faqs"><i class="fa fa-question"></i> سوالات متداول</a> </li>
                    <li><a href="#clients"><i class="fa fa-users"></i> مشتریان من</a> </li>
                    <li><a href="#contact"><i class="fa fa-envelope"></i> تماس با من</a> </li>
                    <li>
                        <form action="<?php echo esc_url(home_url('/')); ?>" id="searchform" method="get">
                            <input class="form-control" type="search" name="s" value="<?php the_search_query(); ?>" placeholder="جستجو کنید...">
                        </form>
                    </li>
                </ul>

            </div><!-- //.nav-list -->
        </div><!-- //.nav-content -->

    </nav><!-- //.navigation -->

    <!-- social media -->
    <div class="social-media">
        <span class="fa fa-share-alt open-social"></span>
        <ul class="list-unstyled">

            <!-- facebook -->
            <li>
                <a  title="فیسبوک علی رشیدنهال" href="https://www.facebook.com/alirashidnahal/" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>

            <!-- twitter -->
            <li>
                <a  title="توییتر علی رشیدنهال" href="https://twitter.com/alirashidnahal/" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>

            <!-- whatsapp -->
            <li>
                <a  title="واتساپ علی رشیدنهال" href="https://wa.me/989362436497?text=سلام جناب رشیدنهال میخواستم خدمتتون عرض کنم..." target="_blank">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </li>

            <!-- Linkedin -->
            <li>
                <a  title="لینکدین علی رشیدنهال" href="https://www.linkedin.com/in/alirashidnahal/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>

            <!-- Telegram -->
            <li>
                <a  title="تلگرام علی رشیدنهال" href="https://telegram.me/alirashidnahal/" target="_blank">
                    <i class="fa fa-telegram"></i>
                </a>
            </li>

            <!-- instagram -->
            <li>
                <a  title="اینستاگرام علی رشیدنهال" href="https://www.instagram.com/ali.rashidnahal/" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>

        </ul>

    </div>
</header>
<!-- //header -->