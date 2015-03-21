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
		<?php get_sidebar('calendar'); ?>
		</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
