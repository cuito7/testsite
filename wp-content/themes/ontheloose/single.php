<?php get_header(); ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2>this a post</h2>

<?php
    the_post();
?>

<h1>DADDYJUICE</h1>

<h3><?php the_title(); ?></h3>
<div><?php the_content(); ?></div>
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="medium_thumbnail_image" /> 

<?php get_footer(); ?>