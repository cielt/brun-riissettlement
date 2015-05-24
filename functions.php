<?php
// Sidebars

if (function_exists('register_sidebar')) {
// News Sidebar

	register_sidebar(array(
		'name'=> 'News Sidebar',
		'id' => 'news',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
}
if (function_exists('register_sidebar')) {
// Photo Sidebar

	register_sidebar(array(
		'name'=> 'Photo Sidebar',
		'id' => 'photo',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
}
if (function_exists('register_sidebar')) {
// Youth Sidebar

	register_sidebar(array(
		'name'=> 'Youth Sidebar',
		'id' => 'youth',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
}
if (function_exists('register_sidebar')) {
// Senior Sidebar

	register_sidebar(array(
		'name'=> 'Senior Sidebar',
		'id' => 'senior',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
}
if (function_exists('register_sidebar')) {
// Immigrant Sidebar

	register_sidebar(array(
		'name'=> 'Immigrant Sidebar',
		'id' => 'immigrant',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
}

if (function_exists('register_sidebar')) {
// Calendar Sidebar

	register_sidebar(array(
		'name'=> 'Calendar Sidebar',
		'id' => 'calendar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
}

/*----------------------------------------
		# 
		# REGISTER SCRIPTS
		# 
		----------------------------------------*/

/**
 * Prints HTML with meta information for the current post-date/time.
 * (author output removed)
 *
 * @since Twenty Ten 1.0
 */
function brunelleschi_posted_on() {
	printf( __( '%2$s ', 'brunelleschi' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		)		
	);
}
?>
