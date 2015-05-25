<?php 
/*
Template Name: Archives
*/
get_header(); ?>
		
		<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">

			<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		
		<h2>Archives by Year:</h2>
		<ul class="archives">
			<?php wp_get_archives('type=yearly'); ?>
		</ul>
		</div><!-- #main -->
<?php if( brunelleschi_options('sidebar') === __('both','brunelleschi')
    || brunelleschi_options('sidebar') === __('two left','brunelleschi')
    || brunelleschi_options('sidebar') === __('two right','brunelleschi')){
      get_sidebar('secondary');
    } ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
