
<?php 

/*
Template Name: Events
*/

get_header(); ?>

<div id="main_event" role="main" class="ninecol last">
<?php get_template_part( 'loop', 'page' ); ?>		

<div class="row clearfix">
	<div class="eightcol" id="front_news"><?php get_sidebar('news'); ?></div>
	<div class="fourcol last" id="event_donate"><?php get_sidebar('photo'); ?></div>
</div>
</div> 
<!-- main -->
<?php get_sidebar('calendar'); ?>
<?php get_footer(); ?>