<?php

if ( class_exists( 'Vc_Manager' ) ) :
	/* Gallery
	---------------------------------------------------------- */
	$categories = get_terms( 'gallery_cat', array(
	    'orderby'    => 'count',
	    'hide_empty' => 1
	) );
	$cats = array();
	$cats['All Category'] = 0;
	foreach ($categories as $key => $value) {
		$cats[$value->name] = $value->term_id;
	}

	vc_map(
		array(
			'name'     => __( 'Custom Gallery', 'itcthemes' ),
			'category' => __( 'Content', 'itcthemes' ),
			'base'     => 'itcthemes_gallery',
			'class'    => '',
			'params'   => array(
				array(
					'heading'     => __( 'Title', 'itcthemes' ),
					'type'        => 'textfield',
					'param_name'  => 'title',
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Category', 'itcthemes' ),
					'value' => $cats,
					'param_name' => 'category',
					'description' => __( 'Select a category to show gallery.', 'itcthemes' ),
				),
				array(
					'heading'     => __( 'Size of images', 'itcthemes' ),
					'type'        => 'textfield',
					'description' => __( 'You can specify an image size which will be used, e.g. "large" or "full". Sizes can be defined under Settings / Media. Leave blank to use a "thumbnail" size.', 'itcthemes' ),
					'param_name'  => 'size',
				),
				array(
					'heading'     => __( 'Number of posts', 'itcthemes' ),
					'type'        => 'textfield',
					'description' => __( 'Enter number of posts to display.', 'itcthemes' ),
					'param_name'  => 'limit',
				),
				array(
				'type' => 'dropdown',
				'heading' => __( 'Column', 'itcthemes' ),
				'value' => array(
					__( '4 Columns', 'itcthemes' ) => 'col-4',
					__( '3 Columns', 'itcthemes' ) => 'col-3',
					__( '2 Columns', 'itcthemes' ) => 'col-2',
				),
				'param_name' => 'column',
				'description' => __( 'Select layout style. Leave blank to use "4 Columns".', 'itcthemes' ),
			),
				array(
					'heading'     => __( 'Extra class name', 'itcthemes' ),
					'type'        => 'textfield',
					'description' => __( 'Select image from media library', 'itcthemes' ),
					'param_name'  => 'extra_class',
				),
			)
		)
	);

	// Image Banner
	vc_map(
		array(
			'name'     => __( 'Image Banner', 'itcthemes' ),
			'category' => __( 'Content', 'itcthemes' ),
			'base'     => 'itcthemes_image_banner',
			'class'    => '',
			'params'   => array(
				array(
					'heading'     => __( 'Image', 'itcthemes' ),
					'type'        => 'attach_image',
					'param_name'  => 'image',
				),
				array(
					'heading'     => __( 'Link', 'itcthemes' ),
					'type'        => 'textfield',
					'param_name'  => 'link',
				),
				array(
					'heading'     => __( 'Extra class name', 'itcthemes' ),
					'type'        => 'textfield',
					'description' => __( 'Select image from media library', 'itcthemes' ),
					'param_name'  => 'extra_class',
				),
			)
		)
	);
endif;