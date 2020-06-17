<?php get_header(); ?>

<h2>this a post</h2>

<?php
    the_post();
?>

<h3><?php the_title(); ?></h3>
<div><?php the_content(); ?></div>
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="medium_thumbnail_image" /> 

<?php get_footer(); ?>