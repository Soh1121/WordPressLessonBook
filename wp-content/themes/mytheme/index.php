<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ページタイトル</title>
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

<h1><?php the_title(); ?></h1>

<div class="postinfo">
    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
    <i class="fa fa-clock-o"></i>
    <?php echo get_the_date(); ?>
    </time>

    <span class="postcat">
    <i class="fa fa-folder-open"></i>
    <?php the_category(', '); ?>
    </span>
</div>

<?php the_content(); ?>

<div class="pagenav">
    <span class="old">
        <?php previous_post_link(); ?>
    </span>
    <span class="new">
        <?php next_post_link(); ?>
    </span>
</div>

</article>

<?php endwhile; endif; ?>

</body>
</html>