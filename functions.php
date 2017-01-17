<?php

// Makes Menu Editable in WP-Admin
	function register_my_menu() {
	  register_nav_menu('header-menu', ( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );


//Blog Page Sidebar
function blog_sidebar_widgets_init() {

	register_sidebar( array(
		'name' => 'Blog Sidebar',
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget' => '</ul>'
	) );
}
add_action( 'widgets_init', 'blog_sidebar_widgets_init' );


//Jobs Page Sidebar
function jobs_page_sidebar_widgets_init() {

	register_sidebar( array(
		'name' => 'Jobs Page Sidebar',
        'before_widget' => '<ul id="%1$s" class="widget %2$s">',
        'after_widget' => '</ul>'
	) );
}
add_action( 'widgets_init', 'jobs_page_sidebar_widgets_init' );

//Metabox Function Registration
include 'metaboxes.php';



// Team Member Homepage Shortcode For Image Boxes
function team_member_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'PictureURL' => '#',
			'QuoteText' => 'Quote goes here',
			'StaffName' => 'Staff Name',
			'Email' => 'name@domain.com',
			'StaffLink' => '#'
		), $atts )
	);
	
	//Output Code with Array Values in Place
	return '<div class="team-member-content">
		<img src="' . $PictureURL . '" class="team-member-picture">
		<div class="team-member-info">
			<p class="team-member-quote">"' . $QuoteText . '"</p>
			<p class="team-member-name">' . $StaffName . '</p>
			<p class="team-member-email"><a href="mailto:' . $Email . '">' . $Email . '</a></p>
			<p class="team-member-bio-link"><a href="' . $StaffLink . '">More about ' . $StaffName . '</a></p>
		</div>
	</div>';
}
add_shortcode( 'TeamMember' , 'team_member_shortcode' );

//[TeamMember Picture_URL="" QuoteText="" StaffName="" Email="" StaffLink=""]

// Add 'Read More' link to blog home page entries
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('...Read More') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


?>
