<?php get_header(); ?>

<div class="homepage_div">
<h2>ontheloosebaby</h2>

<!-- Query for posts which are of 'post_type' => 'post' -->
<?php $query = new WP_Query( array( 'post_type' => 'post' ) ); ?>

<!-- Begin The Loop -->
<?php if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <div class="post">
            <!-- Display the Title as a link to the Post's permalink. -->
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

            <!-- Display the post content -->
            <div class="entry">
              <?php the_content(); ?>
            </div>

            <!-- Display the post thumbnail -->
            <div class="image">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" class="small_thumbnail_image" /> 
            </div>
        </div> 
<?php
    }
}
?>
</div>

<?php get_footer(); ?>