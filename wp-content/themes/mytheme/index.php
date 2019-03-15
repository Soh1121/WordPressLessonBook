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

<?php if(is_single()): ?>
    <h1><?php the_title(); ?></h1>
<?php else: ?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php endif; ?>

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

<?php if(is_single()): ?>
<div class="pagenav">
    <span class="old">
        <?php previous_post_link('%link', '<i class="fa fa-chevron-circle-left"></i> %title'); ?>
    </span>
    <span class="new">
        <?php next_post_link('%link', '%title <i class="fa fa-chevron-circle-right"></i>'); ?>
    </span>
</div>
<?php endif; ?>

</article>

<?php endwhile; endif; ?>

<?php if($wp_query->max_num_pages > 1): ?>
    <div class="pagenav">
        <span class="old">
        <?php next_posts_link('<i class="fa fa-chevron-circle-left"></i> 古い記事'); ?>
        </span>
        <span class="new">
        <?php previous_posts_link('新しい記事 <i class="fa fa-chevron-circle-right"></i>'); ?>
        </span>
    </div>
<?php endif;?>

</body>
</html>