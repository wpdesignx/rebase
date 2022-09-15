<?php
/**
 * 404 Layout options.
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$layout_404_settings = array(
	'404_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'general_404',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'general_404',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'general_404_design',
			),
			'active' => 'general',
		),
	),
	'404_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'general_404_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'general_404',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'general_404_design',
			),
			'active' => 'design',
		),
	),
	'info_404_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'general_404',
		'priority'     => 10,
		'label'        => esc_html__( '404 Layout', 'rebase' ),
		'settings'     => false,
	),
	'info_404_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'general_404_design',
		'priority'     => 10,
		'label'        => esc_html__( '404 Layout', 'rebase' ),
		'settings'     => false,
	),
	'404_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'general_404',
		'label'        => esc_html__( '404 Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( '404_layout' ),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'name' => __( 'Normal', 'rebase' ),
					'icon' => 'normal',
				),
				'narrow' => array(
					'name' => __( 'Narrow', 'rebase' ),
					'icon' => 'narrow',
				),
				'fullwidth' => array(
					'name' => __( 'Fullwidth', 'rebase' ),
					'icon' => 'fullwidth',
				),
				'left' => array(
					'name' => __( 'Left Sidebar', 'rebase' ),
					'icon' => 'leftsidebar',
				),
				'right' => array(
					'name' => __( 'Right Sidebar', 'rebase' ),
					'icon' => 'rightsidebar',
				),
			),
			'class'      => 'base-three-col',
			'responsive' => false,
		),
	),
	'404_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'general_404',
		'label'        => esc_html__( '404 Default Sidebar', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( '404_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'404_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'general_404',
		'label'        => esc_html__( 'Content Style', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( '404_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.error404',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'name' => __( 'Boxed', 'rebase' ),
					'icon' => 'boxed',
				),
				'unboxed' => array(
					'name' => __( 'Unboxed', 'rebase' ),
					'icon' => 'narrow',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'404_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'general_404',
		'label'        => esc_html__( 'Content Vertical Padding', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( '404_vertical_padding' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.error404',
				'pattern'  => 'content-vertical-padding-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'show' => array(
					'name' => __( 'Enable', 'rebase' ),
				),
				'hide' => array(
					'name' => __( 'Disable', 'rebase' ),
				),
				'top' => array(
					'name' => __( 'Top Only', 'rebase' ),
				),
				'bottom' => array(
					'name' => __( 'Bottom Only', 'rebase' ),
				),
			),
			'responsive' => false,
			'class'      => 'base-two-grid',
		),
	),
	'404_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'general_404_design',
		'label'        => esc_html__( 'Site Background', 'rebase' ),
		'default'      => webapp()->default( '404_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.error404',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( '404 Background', 'rebase' ),
		),
	),
	'404_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'general_404_design',
		'label'        => esc_html__( 'Content Background', 'rebase' ),
		'default'      => webapp()->default( '404_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.error404 .content-bg, body.error404.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( '404 Content Background', 'rebase' ),
		),
	),
);
Theme_Customizer::add_settings( $layout_404_settings );
