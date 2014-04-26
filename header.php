<!doctype html>
<html>
    <head>
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <meta name="description" content="Website description goes here" />
        <meta name="keywords" content="Site keywords go here" />
        <meta name="author" content="Author" />

        <meta property="og:title" content="<?php bloginfo('name'); ?>" />
        <meta property="og:url" content="<?php bloginfo('url'); ?>" />
        <meta property="og:description" content="Site description" />
        <meta property="og:image" content="#" />

        <title><?php bloginfo('name'); ?></title>

        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

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
        <div class="header--full">
            <header>
                <h1>
                    <a href="<?php bloginfo('url'); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <span class="tagline">
                    <?php bloginfo('description'); ?>
                </span>
            </header>
        </div> <!-- .header--full -->
        <div class="nav--full">

            <nav class="site--nav">

                <?php wp_nav_menu(); ?>
            </nav>
        </div> <!-- .nav--full -->