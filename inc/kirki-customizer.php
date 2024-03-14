<?php

new \Kirki\Panel(
	'background_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Kirki Custom Panel', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'background_section_id',
	[
		'title'       => esc_html__( 'Background Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

// banner background color and image control
new \Kirki\Field\Background(
	[
		'settings'    => 'banner-background_color',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'background_section_id',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.banner',
			],
		],
	]
);

// new section for code editor

new \Kirki\Section(
	'code_section_id',
	[
		'title'       => esc_html__( 'Code Editor Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

// used for adding custom html,css,js
new \Kirki\Field\Code(
	[
		'settings'    => 'code_setting',
		'label'       => esc_html__( 'Code Control', 'kirki' ),
		'description' => esc_html__( 'Description', 'kirki' ),
		'section'     => 'code_section_id',
		'default'     => '',
		'choices'     => [
			'language' => ['html','css','js'], //added more languages to support
		],
	]
);


// typography

new \Kirki\Section(
	'typography_section_id',
	[
		'title'       => esc_html__( 'Typography Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'banner-typography',
		'label'       => esc_html__( 'Typography Control', 'kirki' ),
		'description' => esc_html__( 'The full set of options.', 'kirki' ),
		'section'     => 'typography_section_id',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#333333',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
		'output'      => [
			[
				// 'element' => ['h1','p']
                'element' => '.banner-heading',
			],
		],
	]
);

// generic

new \Kirki\Section(
	'generic_section_id',
	[
		'title'       => esc_html__( 'Generic Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Generic(
	[
		'settings'    => 'generic_custom_setting',
		'label'       => esc_html__( 'Custom input Control.', 'kirki' ),
		'description' => esc_html__( 'The "generic" control allows you to add any input type you want. In this case we use type="password" and define custom styles.', 'kirki' ),
		'section'     => 'generic_section_id',
		'default'     => [
            'style'    => 'background-color:white;color:black;',
        ],
		'choices'     => [
			'element'  => 'input',
			'type'     => 'password',
			'style'    => 'background-color:#ffffff;color:black;',
			'data-foo' => 'bar',
		],
	]
);

// date

new \Kirki\Section(
	'date_section_id',
	[
		'title'       => esc_html__( 'Date Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Date(
	[
		'settings'    => 'date_setting',
		'label'       => esc_html__( 'Date Control', 'kirki' ),
		'description' => esc_html__( 'This is a date control.', 'kirki' ),
		'section'     => 'date_section_id',
		'default'     => '2019-01-30',
	]
);

// slider
new \Kirki\Section(
	'slider_section_id',
	[
		'title'       => esc_html__( 'Slider Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);
new \Kirki\Field\Slider(
	[
		'settings'    => 'slider_setting',
		'label'       => esc_html__( 'This is the label', 'kirki' ),
		'section'     => 'slider_section_id',
		'default'     => 10,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	]
);

// sortable 

new \Kirki\Section(
	'sortable_section_id',
	[
		'title'       => esc_html__( 'Sortable Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Sortable(
	[
		'settings' => 'sortable_setting',
		'label'    => __( 'This is the label', 'kirki' ),
		'section'  => 'sortable_section_id',
		'default'  => [ 'option3', 'option1', 'option4' ],
		'priority' => 10,
		'choices'  => [
			'option1' => esc_html__( 'Option 1', 'kirki' ),
			'option2' => esc_html__( 'Option 2', 'kirki' ),
			'option3' => esc_html__( 'Option 3', 'kirki' ),
			'option4' => esc_html__( 'Option 4', 'kirki' ),
			'option5' => esc_html__( 'Option 5', 'kirki' ),
			'option6' => esc_html__( 'Option 6', 'kirki' ),
		],
	]
);

// dimensions

new \Kirki\Section(
	'dimensions_section_id',
	[
		'title'       => esc_html__( 'Dimentions Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Dimensions(
	[
		'settings'    => 'setting_dimensions_2',
		'label'       => esc_html__( 'Dimension Control', 'kirki' ),
		'description' => esc_html__( '4 fields - would typically be used for padding or margin', 'kirki' ),
		'section'     => 'dimensions_section_id',
		'default'     => [
			'padding-top'    => '1em',
			'padding-bottom' => '10rem',
			'padding-left'   => '1vh',
			'padding-right'  => '10px',
            'margin-top'    => '1em',
			'margin-bottom' => '10rem',
			'margin-left'   => '1vh',
			'margin-right'  => '10px',
		],
        
	]
);

// multicolor

new \Kirki\Section(
	'multicolor_section_id',
	[
		'title'       => esc_html__( 'Multicolor Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Multicolor(
	[
		'settings'  => 'multicolor_setting',
		'label'     => esc_html__( 'Multicolor Control', 'kirki' ),
		'section'   => 'multicolor_section_id',
		'priority'  => 10,
		'choices'   => [
			'link'     => esc_html__( 'Color', 'kirki' ),
			'hover'    => esc_html__( 'Hover', 'kirki' ),
			'active'   => esc_html__( 'Active', 'kirki' ),
		],
		'alpha'     => true,
		'default'   => [
			'link'   => '#0088cc',
			'hover'  => '#00aaff',
			'active' => '#00ffff',
		],
	]
);

// editor

new \Kirki\Section(
	'editor_section_id',
	[
		'title'       => esc_html__( 'Editor Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Editor(
	[
		'settings'    => 'editor_setting',
		'label'       => esc_html__( 'My Editor Control', 'kirki' ),
		'description' => esc_html__( 'This is an editor control.', 'kirki' ),
		'section'     => 'editor_section_id',
		'default'     => '',
	]
);

// repeater

new \Kirki\Section(
	'repeater_section_id',
	[
		'title'       => esc_html__( 'Reapter Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'repeater_setting',
		'label'    => esc_html__( 'Repeater Control', 'kirki' ),
		'section'  => 'repeater_section_id',
		'priority' => 10,
		'default'  => [
			[
				'link_text'   => esc_html__( 'Kirki Site', 'kirki' ),
				'link_url'    => 'https://kirki.org/',
				'link_target' => '_self',
				'checkbox'    => false,
			],
			[
				'link_text'   => esc_html__( 'Kirki WP', 'kirki' ),
				'link_url'    => 'https://wordpress.org/plugins/kirki/',
				'link_target' => '_blank',
				'checkbox'    => true,
			],
		],
		'fields'   => [
			'link_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link Text', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'link_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link URL', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'link_target' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '_self',
				'choices'     => [
					'_blank' => esc_html__( 'New Window', 'kirki' ),
					'_self'  => esc_html__( 'Same Frame', 'kirki' ),
				],
			],
			'checkbox'    => [
				'type'    => 'checkbox',
				'label'   => esc_html__( 'Checkbox', 'kirki' ),
				'default' => false,
			],
		],
	]
);