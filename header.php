<!doctype html>
<html>
    <head>
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="tokyosushi.com" />

        <meta name="description" content="Website description goes here" />
        <meta name="keywords" content="Site keywords go here" />
        <meta name="author" content="Author" />

        <meta property="og:title" content="<?php bloginfo('name'); ?>" />
        <meta property="og:url" content="<?php bloginfo('url'); ?>" />
        <meta property="og:description" content="Site description" />
        <meta property="og:image" content="#" />

        <title><?php bloginfo('name'); ?></title>

        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
        <link rel="icon" sizes="196x196" href="mobile_web--logo.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">

        <script>
            /*
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '', '');
            ga('send', 'pageview');
            */
        </script>
    </head>
    <body>
        <div class="header--full wrapper">
            <header>
                <h1 class="logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <span class="tagline">
                    <?php bloginfo('description'); ?>
                </span>
            </header>
        </div> <!-- .header--full -->
        <div class="nav--full wrapper">

            <nav class="site--nav mobile">
                <ul>
                    <li><a class="btn" href="tel:416-513-0002">Call</a></li>
                    <li><a class="btn" href="http://localhost/tokyosushi/?post_type=menu">Menu</a></li>
                </ul>
            </nav>

            <nav class="site--nav desktop">
                <?php wp_nav_menu(); ?>
            </nav>
        </div> <!-- .nav--full -->