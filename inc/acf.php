<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Layout Settings',
		'menu_title'	=> 'Layout',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Colors Settings',
		'menu_title'	=> 'Colors',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sliders',
		'menu_title'	=> 'Main Sliders',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Socials',
		'menu_title'	=> 'Socials',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

if ( function_exists( 'register_field_group' ) ) {
	register_field_group(
		array(
			'id'     => 'layout-options',
			'title'  => __( 'Layout Options', 'itcthemes' ),
			'fields' => array(
				array(
					'key'          => 'field_549fgd94f',
					'label'        =>  __( 'Site Layout', 'itcthemes' ),
					'name'         => 'acf_site_layout',
					'type'         => 'select',
					'choices' => array(
						'fullwidth'       => __( 'Full Width', 'itcthemes' ),
						'boxed'       => __( 'Boxed', 'itcthemes' ),
					),
					'default_value' => 'fullwidth',
					'allow_null'    => 0,
					'multiple'      => 0,
				),
				array(
					'key'          => 'field_549b65f3ad94f',
					'label'        =>  __( 'Container width', 'itcthemes' ),
					'name'         => 'acf_container_width',
					'type'         => 'text',
					'instructions' => __( 'Default width: <strong>1170px</strong>', 'itcthemes' ),
					'default_value' => '1170px',
				),
				array(
					'key'          => 'field_549b74c3ad94f',
					'label'        =>  __( 'Select Page Layout', 'itcthemes' ),
					'name'         => 'acf_page_layout',
					'type'         => 'select',
					'instructions' => __( 'Default layout: <strong>Right Sidebar</strong>', 'itcthemes' ),
					'choices' => array(
						'main'            => __( 'Full Width', 'itcthemes' ),
						'left-main'       => __( 'Left Sidebar', 'itcthemes' ),
						'main-right'      => __( 'Right Sidebar', 'itcthemes' ),
						'left-main-right' => __( 'Left - Main Content - Right', 'itcthemes' ),
					),
					'default_value' => 'main-right',
					'allow_null'    => 0,
					'multiple'      => 0,
				),
				array(
					'key'          => 'field_gr4sd94f',
					'label'        =>  __( 'Sidebar column width', 'itcthemes' ),
					'name'         => 'acf_sidebar_width',
					'type'         => 'select',
					'choices' => array(
						'1'        => __( 'One column', 'itcthemes' ),
						'2'        => __( 'Two column', 'itcthemes' ),
						'3'        => __( 'Three column', 'itcthemes' ),
						'4'        => __( 'Four column', 'itcthemes' ),
						'5'        => __( 'Five column', 'itcthemes' ),
					),
					'default_value' => '4',
					'allow_null'    => 0,
					'multiple'      => 0,
				),
				array(
					'key'          => 'field_544fgk4f',
					'label'        =>  __( 'Select Blog Layout', 'itcthemes' ),
					'name'         => 'acf_blog_layout',
					'type'         => 'select',
					'choices' => array(
						'thumb-fullwidth'  => __( 'Thumbnail Full Width', 'itcthemes' ),
						'thumb-left'       => __( 'Left Thumbnail', 'itcthemes' ),
						'boxed'      	   => __( 'Boxed', 'itcthemes' ),
					),
					'default_value' => 'thumb-left',
					'allow_null'    => 0,
					'multiple'      => 0,
				),
				array(
					'key'          => 'field_23fs54f',
					'label'        =>  __( 'Single post thumbnail', 'itcthemes' ),
					'name'         => 'acf_post_thumb',
					'type'         => 'true_false',
					'instructions'  => __( 'Select this if you want to hide Single post thumbnail', 'itcthemes' ),
					'default_value' => '0',
				),
				array(
					'key'          => 'field_54fde54b74c3ad94f',
					'label'        =>  __( 'Select Header Layout', 'itcthemes' ),
					'name'         => 'acf_header_layout',
					'type'         => 'select',
					'choices' => array(
						'header1'  => __( 'Header Version 1', 'itcthemes' ),
						'header2'  => __( 'Header Version 2', 'itcthemes' ),
						'header3'  => __( 'Header Version 3', 'itcthemes' ),
						'header4'  => __( 'Header Version 4', 'itcthemes' ),
						'header5'  => __( 'Header Version 5', 'itcthemes' ),
					),
					'default_value' => 'header1',
					'allow_null'    => 0,
					'multiple'      => 0,
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'acf-options-layout',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'options' => array(
				'position'       => 'normal',
				'layout'         => 'default',
				'hide_on_screen' => array(
				),
			),
		)
	);

	register_field_group(
		array(
			'id'     => 'colors-options',
			'title'  => __( 'Colors Options', 'itcthemes' ),
			'fields' => array(
				array(
					'key'          => 'field_54123jfd54f',
					'label'        =>  __( 'Body background', 'itcthemes' ),
					'name'         => 'acf_body_bg',
					'type'         => 'color_picker',
					'instructions' => __( 'Background body. Default is while backgorund', 'itcthemes' ),
					'default_value' => '#FFF',
				),
				array(
					'key'          => 'field_54176790jfd54f',
					'label'        =>  __( 'Body color', 'itcthemes' ),
					'name'         => 'acf_body_color',
					'type'         => 'color_picker',
					'instructions' => __( 'Body color. Default is #212121', 'itcthemes' ),
					'default_value' => '#212121',
				),
				array(
					'key'          => 'field_54gfg334f',
					'label'        =>  __( 'Active color', 'itcthemes' ),
					'name'         => 'acf_active_color',
					'type'         => 'color_picker',
					'instructions' => __( 'Active color. Default is #E31E1E', 'itcthemes' ),
					'default_value' => '#E31E1E',
				),
				array(
					'key'          => 'field_541fd34d54f',
					'label'        =>  __( 'Menu background', 'itcthemes' ),
					'name'         => 'acf_menu_bg',
					'type'         => 'color_picker',
					'instructions' => __( 'Main menu background. Default: #212121', 'itcthemes' ),
					'default_value' => '#212121',
				),
				array(
					'key'          => 'field_glgkf343f',
					'label'        =>  __( 'Bottom background', 'itcthemes' ),
					'name'         => 'acf_bottom_bg',
					'type'         => 'color_picker',
					'instructions' => __( 'Bottom background. Default: #333333', 'itcthemes' ),
					'default_value' => '#333333',
				),
				array(
					'key'          => 'field_dsde430f',
					'label'        =>  __( 'Bottom color', 'itcthemes' ),
					'name'         => 'acf_bottom_color',
					'type'         => 'color_picker',
					'instructions' => __( 'Bottom color. Default: #f7f7f7', 'itcthemes' ),
					'default_value' => '#f7f7f7',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'acf-options-colors',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'options' => array(
				'position'       => 'normal',
				'layout'         => 'default',
				'hide_on_screen' => array(
				),
			),
		)
	);

	register_field_group(
		array(
			'id'     => 'general-options',
			'title'  => __( 'General Options', 'itcthemes' ),
			'fields' => array(
				// array(
				// 	'key'          => 'field_09r4354f',
				// 	'label'        =>  __( 'Show search box', 'itcthemes' ),
				// 	'name'         => 'acf_searchbox',
				// 	'type'         => 'true_false',
				// 	'instructions'  => __( 'Select this if you want to hide Search box', 'itcthemes' ),
				// 	'default_value' => '0',
				// ),
				// array(
				// 	'key'          => 'field_fdjk33jfd54f',
				// 	'label'        =>  __( 'Site logo', 'itcthemes' ),
				// 	'name'         => 'acf_logo',
				// 	'type'         => 'image',
				// ),
				// array(
				// 	'key'          => 'field_fdjk33jad54f',
				// 	'label'        =>  __( 'Favicon', 'itcthemes' ),
				// 	'name'         => 'acf_favicon',
				// 	'type'         => 'image',
				// ),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'theme-general-settings',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'options' => array(
				'position'       => 'normal',
				'layout'         => 'default',
				'hide_on_screen' => array(
				),
			),
		)
	);

	register_field_group(
		array(
			'id'     => 'socials-options',
			'title'  => __( 'Socials Option', 'itcthemes' ),
			'fields' => array(
				array(
					'key'          => 'field_edd43df',
					'label'        =>  __( 'Add Social', 'itcthemes' ),
					'name'         => 'acf_social',
					'type'         => 'repeater',
					'sub_fields' => array(
						array(
							'key'	=> 'field_rtds002ds',
							'label' => 'Icon',
							'name'  => 'icon',
							'type'  => 'radio',
							'choices' => array(
								'facebook'     => '<i class="fa fa-facebook"></i>',
								'twitter'      => '<i class="fa fa-twitter"></i>',
								'google-plus'  => '<i class="fa fa-google-plus"></i>',
								'youtube'     => '<i class="fa fa-youtube"></i>',
							),
							'default_value' => 'facebook',
							'allow_null'    => 0,
							'multiple'      => 0,
						),
						array(
							'key'	=> 'field_sed33s',
							'label' => 'Name',
							'type' => 'text',
							'name' => 'name',
						),
						array(
							'key'	=> 'field_sd445ds',
							'label' => 'Link',
							'type' => 'url',
							'name' => 'link',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'acf-options-socials',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
			'options' => array(
				'position'       => 'normal',
				'layout'         => 'default',
				'hide_on_screen' => array(
				),
			),
		)
	);
}


?>