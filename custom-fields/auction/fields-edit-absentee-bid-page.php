<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'EDIT_ABSENTEE_BID_FIELDS_register_meta_boxes' );

function EDIT_ABSENTEE_BID_FIELDS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'BID_ABSENTEE_EDIT';
	$meta_boxes[] = array(
		'title'  => 'telephone bid',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-bid-absentee-edit.php'),
		),
		'fields' => array(
			Field_modules::create_text_block_group($box_prefix, '#'),
		),
	);

    return $meta_boxes;
}
?>