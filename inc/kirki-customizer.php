<?php

new \Kirki\Panel(
	'background_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Background Panel', 'kirki' ),
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

// background color and image control
new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting',
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
				'element' => 'body',
			],
		],
	]
);

// new section for code editor

new \Kirki\Section(
	'background_section_id',
	[
		'title'       => esc_html__( 'Background Section', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'background_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Code(
	[
		'settings'    => 'code_setting',
		'label'       => esc_html__( 'Code Control', 'kirki' ),
		'description' => esc_html__( 'Description', 'kirki' ),
		'section'     => 'section_id',
		'default'     => '',
		'choices'     => [
			'language' => 'css',
		],
	]
);