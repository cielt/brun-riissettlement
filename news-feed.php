<?php 
/*
Template Name: News Feed Template
*/
get_header(); ?>
<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">
  <div class="news-feed">
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
    <span class=""><?php the_date(); ?></span>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="post-content"><?php the_content(); ?></div>
  </div>
  <div class="hairline-logo"><span class="butterfly"></span></div>

<?php endforeach; 
wp_reset_postdata(); ?>
  </div>
  <div class="utilities">
    <nav class="navigation">
          <div class="nav-next"><a href="/news-events/news/archives/">
            See All News <span class="meta-nav">&rarr;</span></a>
          </div>
        </nav>
  </div>
</div><!-- #main -->
<?php if( brunelleschi_options('sidebar') === __('both','brunelleschi')
    || brunelleschi_options('sidebar') === __('two left','brunelleschi')
    || brunelleschi_options('sidebar') === __('two right','brunelleschi')){
      get_sidebar('secondary');
    } ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>