<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ページタイトル</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

<h1><?php the_title(); ?></h1>

<time datetime="<?php echo get_the_date('Y-m-d'); ?>">
<?php echo get_the_date(); ?>
</time>

<span class="postcat">
<?php the_category(', '); ?>
</span>

<?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

</body>
</html>