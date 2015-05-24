<?php 

/*
Template Name: Homepage
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="twelvecol last clearfix"><?php the_content(); ?></div>
		<div id="main2" class="ninecol">
			<div class="margin-b-30 clearfix" id="appeal-cta">
    <a class="cta-banner-main" href="http://riissettlementdenmark.causevox.com/" target="_blank">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/05/2015-banner-danish-ye.jpg">
    </a>
</div>
			<div class="clearfix" id="programrow">
				<div class="fourcol left" id="program"><?php get_sidebar('youth'); ?>
</div>
				<div class="fourcol" id="program"><?php get_sidebar('senior'); ?></div>
				<div class="fourcol last" id="program"><?php get_sidebar('immigrant'); ?></div>
			</div>
				
		
		<div class="clearfix">
				<div class="eightcol" id="front_news"><?php get_sidebar('news'); ?></div>
				<div class="fourcol last" id="front_photo"><?php get_sidebar('photo'); ?></div>
				
			
		</div>
		</div><!-- #main -->
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>