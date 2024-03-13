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
				'element' => ['.banner'],
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

new \Kirki\Field\Background(
	[
		'settings'    => 'sort-background_color',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'sortable_section_id',
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => ['.sort-option'],
			],
		],
	]
);