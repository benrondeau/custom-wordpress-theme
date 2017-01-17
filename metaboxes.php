<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */


add_filter( 'rwmb_meta_boxes', 'BaconLee_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @return void
 */
function BaconLee_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'BL_';

	// 1st meta box
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id' => 'sidebar-text',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Right Sidebar Content'),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'page' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		//'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		//'autosave' => true,

		// List of meta fields
		'fields' => array(
			// TEXTAREA
			array(
				'name' => __( 'Sidebar Content'),
				'desc' => __( 'Enter content you wish to be displayed in the right sidebar if the page supports it.'),
				'id'   => "{$prefix}textarea",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 8,
			)
		),
		'validation' => array(
			'rules' => array(
				"{$prefix}password" => array(
					'required'  => true,
					'minlength' => 7,
				)
			)
		)
	);
	
	return $meta_boxes;
}

