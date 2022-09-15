<?php
/**
 * Header Popup Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'header_popup_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'header_popup',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'header_popup',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'header_popup_design',
			),
			'active' => 'general',
		),
	),
	'header_popup_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'header_popup_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'header_popup',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'header_popup_design',
			),
			'active' => 'design',
		),
	),
	'header_popup_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'header_popup',
		'priority'     => 4,
		'default'      => webapp()->default( 'header_popup_layout' ),
		'label'        => esc_html__( 'Layout', 'rebase' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '#mobile-drawer',
				'pattern'  => 'popup-drawer-layout-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'fullwidth' => array(
					'tooltip' => __( 'Reveal as Fullwidth', 'rebase' ),
					'name'    => __( 'Fullwidth', 'rebase' ),
					'icon'    => '',
				),
				'sidepanel' => array(
					'tooltip' => __( 'Reveal as Side Panel', 'rebase' ),
					'name'    => __( 'Side Panel', 'rebase' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
		),
	),
	'header_popup_side' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'header_popup',
		'priority'     => 4,
		'default'      => webapp()->default( 'header_popup_side' ),
		'label'        => esc_html__( 'Slide-Out Side', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'header_popup_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'layout',
				'responsive' => false,
				'value'      => 'sidepanel',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '#mobile-drawer',
				'pattern'  => 'popup-drawer-side-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'left' => array(
					'tooltip' => __( 'Reveal from Left', 'rebase' ),
					'name'    => __( 'Left', 'rebase' ),
					'icon'    => '',
				),
				'right' => array(
					'tooltip' => __( 'Reveal from Right', 'rebase' ),
					'name'    => __( 'Right', 'rebase' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
		),
	),
	'enable_popup_body_animate' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'header_popup',
		'priority'     => 4,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'enable_popup_body_animate' ),
		'label'        => esc_html__( 'Move Body with toggle?', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'header_popup_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'layout',
				'responsive' => false,
				'value'      => 'sidepanel',
			),
		),
	),
	'header_popup_animation' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'header_popup',
		'priority'     => 4,
		'default'      => webapp()->default( 'header_popup_animation' ),
		'label'        => esc_html__( 'Animation', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'header_popup_layout',
				'operator'   => 'sub_object_contains',
				'sub_key'    => 'layout',
				'responsive' => false,
				'value'      => 'fullwidth',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '#mobile-drawer',
				'pattern'  => 'popup-drawer-animation-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'fade' => array(
					'tooltip' => __( 'Fade In', 'rebase' ),
					'name'    => __( 'Fade', 'rebase' ),
					'icon'    => '',
				),
				'scale' => array(
					'tooltip' => __( 'Scale into view', 'rebase' ),
					'name'    => __( 'Scale', 'rebase' ),
					'icon'    => '',
				),
				'slice' => array(
					'tooltip' => __( 'Slice into view', 'rebase' ),
					'name'    => __( 'Slice', 'rebase' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
		),
	),
	'header_popup_content_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'header_popup',
		'label'        => esc_html__( 'Content Align', 'rebase' ),
		'default'      => webapp()->default( 'header_popup_content_align' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.mobile-drawer-content',
				'pattern'  => 'content-align-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'left'   => array(
					'tooltip'  => __( 'Left Align', 'rebase' ),
					'dashicon' => 'editor-alignleft',
				),
				'center' => array(
					'tooltip'  => __( 'Center Align', 'rebase' ),
					'dashicon' => 'editor-aligncenter',
				),
				'right'  => array(
					'tooltip'  => __( 'Right Align', 'rebase' ),
					'dashicon' => 'editor-alignright',
				),
			),
			'responsive' => false,
		),
	),
	'header_popup_vertical_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'header_popup',
		'label'        => esc_html__( 'Content Vertical Align', 'rebase' ),
		'default'      => webapp()->default( 'header_popup_vertical_align' ),
		'live_method'  => array(
			array(
				'type'     => 'class',
				'selector' => '.mobile-drawer-content',
				'pattern'  => 'content-valign-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'top' => array(
					'tooltip' => __( 'Top Align', 'rebase' ),
					'icon'    => 'aligntop',
				),
				'middle' => array(
					'tooltip' => __( 'Middle Align', 'rebase' ),
					'icon'    => 'alignmiddle',
				),
				'bottom' => array(
					'tooltip' => __( 'Bottom Align', 'rebase' ),
					'icon'    => 'alignbottom',
				),
			),
			'responsive' => false,
		),
	),
	'header_popup_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'header_popup_design',
		'label'        => esc_html__( 'Popup Background', 'rebase' ),
		'default'      => webapp()->default( 'header_popup_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#mobile-drawer .drawer-inner, #mobile-drawer.popup-drawer-layout-fullwidth.popup-drawer-animation-slice .pop-portion-bg',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Popup Background', 'rebase' ),
		),
	),
	'header_popup_close_icon_size' => array(
		'control_type' => 'base_range_control',
		'section'      => 'header_popup_design',
		'label'        => esc_html__( 'Close Icon Size', 'rebase' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-drawer .drawer-header .drawer-toggle',
				'property' => 'font-size',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'header_popup_close_icon_size' ),
		'input_attrs'  => array(
			'min'        => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'        => array(
				'px'  => 100,
				'em'  => 12,
				'rem' => 12,
			),
			'step'       => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'      => array( 'px', 'em', 'rem' ),
			'responsive' => false,
		),
	),
	'header_popup_close_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'header_popup_design',
		'label'        => esc_html__( 'Close Toggle Colors', 'rebase' ),
		'default'      => webapp()->default( 'header_popup_close_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-drawer .drawer-header .drawer-toggle',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#mobile-drawer .drawer-header .drawer-toggle:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'rebase' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'rebase' ),
					'palette' => true,
				),
			),
		),
	),
	'header_popup_close_background' => array(
		'control_type' => 'base_color_control',
		'section'      => 'header_popup_design',
		'label'        => esc_html__( 'Close Toggle Background Colors', 'rebase' ),
		'default'      => webapp()->default( 'header_popup_close_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-drawer .drawer-header .drawer-toggle',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#mobile-drawer .drawer-header .drawer-toggle:hover',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Initial Color', 'rebase' ),
					'palette' => true,
				),
				'hover' => array(
					'tooltip' => __( 'Hover Color', 'rebase' ),
					'palette' => true,
				),
			),
		),
	),
	'header_popup_close_padding' => array(
		'control_type' => 'base_measure_control',
		'section'      => 'header_popup_design',
		'default'      => webapp()->default( 'header_popup_close_padding' ),
		'label'        => esc_html__( 'Close Icon Padding', 'rebase' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#mobile-drawer .drawer-header .drawer-toggle',
				'property' => 'padding',
				'pattern'  => '$',
				'key'      => 'measure',
			),
		),
		'input_attrs'  => array(
			'responsive' => false,
		),
	),
);

Theme_Customizer::add_settings( $settings );

