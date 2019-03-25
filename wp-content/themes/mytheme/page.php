<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?>
    <?php wp_title(); ?></title>

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
</header>

<div class="container">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

</div> <!-- container -->

<footer>
    <div class="container">
    <small>Copyright &copy; <?php bloginfo('name'); ?></small>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>