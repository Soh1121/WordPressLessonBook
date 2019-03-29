<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?>
    <?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width">

    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="siteinfo">
        <div class="container">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/header-960x160.jpg" width="960" height="160" alt="">

    <nav>
    <div class="container">
    <?php wp_nav_menu('theme_location=navigation'); ?>
    </div>
    </nav>
</header>