<?php
add_action( 'cmb2_admin_init', 'cmb2_homepage_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_homepage_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_home_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'homepage_metabox',
		'title'         => __( 'Homepage Metabox', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-homepage.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		'closed'     => true, // Keep the metabox closed by default
	) );

  $homepage_slider_group = $cmb->add_field( array(
  	'id'          => 'homepage_slider_group',
  	'type'        => 'group',
  	'description' => __( 'Banner Images for the homepage', 'cmb2' ),
  	// 'repeatable'  => false, // use false if you want non-repeatable group
  	'options'     => array(
  		'group_title'   => __( 'Banner {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
  		'add_button'    => __( 'Add Another Banner', 'cmb2' ),
  		'remove_button' => __( 'Remove Banner', 'cmb2' ),
  		'sortable'      => true, // beta
  		'closed'     => true, // true to have the groups closed by default
  	),
  ) );

  // Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb->add_group_field( $homepage_slider_group, array(
  	'name' => 'Banner Text (leave blank for no text)',
  	'id'   => 'home_banner_text',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $homepage_slider_group, array(
  	'name' => 'Banner Image',
  	'id'   => 'home_banner_image',
  	'type' => 'file',
  ) );
	// Add other metaboxes as needed
  $homepage_cta_boxes = $cmb->add_field( array(
  	'id'          => 'homepage_cta_boxes',
  	'type'        => 'group',
  	'description' => __( '3 boxes for homepage (only add 3 total!)', 'cmb2' ),
  	// 'repeatable'  => false, // use false if you want non-repeatable group
  	'options'     => array(
  		'group_title'   => __( 'Box {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
  		'add_button'    => __( 'Add Another Box', 'cmb2' ),
  		'remove_button' => __( 'Remove Box', 'cmb2' ),
  		'sortable'      => true, // beta
  		'closed'     => true, // true to have the groups closed by default
  	),
  ) );

  // Id's for group's fields only need to be unique for the group. Prefix is not needed.
  $cmb->add_group_field( $homepage_cta_boxes, array(
  	'name' => 'Box Title',
  	'id'   => 'home_box_title',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

  $cmb->add_group_field( $homepage_cta_boxes, array(
  	'name' => 'Box Image (cropped to square)',
  	'id'   => 'home_box_image',
  	'type' => 'file',
  ) );
  $cmb->add_group_field( $homepage_cta_boxes, array(
  	'name' => 'Box Link',
  	'id'   => 'home_box_link',
  	'type' => 'text',
  	// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
  ) );

}
