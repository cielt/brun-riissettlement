<?php 
/*
Template Name: News Feed Template
*/
get_header(); ?>
<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">

  <h1>Recent News</h1>
  <?php
  $args = array('numberposts' => '5',
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish' );
  $lastposts = get_posts( $args );
  foreach ( $lastposts as $post ) :
    setup_postdata( $post ); ?>
  <div class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <span class=""><?php the_date(); ?></span>
    <div class="post-content"><?php the_content(); ?></div>
  </div>
  <div class="hairline-logo">
    <span class="butterfly"></span>
  </div>
<?php endforeach; 
wp_reset_postdata(); ?>
</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>