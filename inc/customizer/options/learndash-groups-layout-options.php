<?php
/**
 * Group Layout Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'sfwd_groups_layout_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'sfwd_groups_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'sfwd_groups_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'sfwd_groups_layout_design',
			),
			'active' => 'general',
		),
	),
	'sfwd_groups_layout_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'sfwd_groups_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'sfwd_groups_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'sfwd_groups_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_groups_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Group Title', 'rebase' ),
		'settings'     => false,
	),
	'info_groups_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'sfwd_groups_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Group Title', 'rebase' ),
		'settings'     => false,
	),
	'groups_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 3,
		'default'      => webapp()->default( 'groups_title' ),
		'label'        => esc_html__( 'Show Group Title?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'groups_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Group Title Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'groups_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'tooltip' => __( 'In Content', 'rebase' ),
					'icon'    => 'incontent',
				),
				'above' => array(
					'tooltip' => __( 'Above Content', 'rebase' ),
					'icon'    => 'abovecontent',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'groups_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'groups_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.groups-hero-section',
				'pattern'  => 'entry-hero-layout-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'standard' => array(
					'tooltip' => __( 'Background Fullwidth, Content Contained', 'rebase' ),
					'name'    => __( 'Standard', 'rebase' ),
					'icon'    => '',
				),
				'fullwidth' => array(
					'tooltip' => __( 'Background & Content Fullwidth', 'rebase' ),
					'name'    => __( 'Fullwidth', 'rebase' ),
					'icon'    => '',
				),
				'contained' => array(
					'tooltip' => __( 'Background & Content Contained', 'rebase' ),
					'name'    => __( 'Contained', 'rebase' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
		),
	),
	'groups_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Group Title Align', 'rebase' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'groups_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.groups-title',
				'pattern'  => array(
					'desktop' => 'title-align-$',
					'tablet'  => 'title-tablet-align-$',
					'mobile'  => 'title-mobile-align-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'left' => array(
					'tooltip'  => __( 'Left Align Title', 'rebase' ),
					'dashicon' => 'editor-alignleft',
				),
				'center' => array(
					'tooltip'  => __( 'Center Align Title', 'rebase' ),
					'dashicon' => 'editor-aligncenter',
				),
				'right' => array(
					'tooltip'  => __( 'Right Align Title', 'rebase' ),
					'dashicon' => 'editor-alignright',
				),
			),
			'responsive' => true,
		),
	),
	'groups_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Title Container Min Height', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .groups-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'groups_title_height' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 10,
				'em'  => 1,
				'rem' => 1,
				'vh'  => 2,
			),
			'max'     => array(
				'px'  => 800,
				'em'  => 12,
				'rem' => 12,
				'vh'  => 100,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
				'vh'  => 1,
			),
			'units'   => array( 'px', 'em', 'rem', 'vh' ),
		),
	),
	'groups_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 6,
		'default'      => webapp()->default( 'groups_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'rebase' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'groups_title_elements',
			'title' => 'groups_title_element_title',
			'breadcrumb'  => 'groups_title_element_breadcrumb',
		),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'group' => 'groups_title_element',
		),
	),
	'groups_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Group Title Font', 'rebase' ),
		'default'      => webapp()->default( 'groups_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.groups-title h1',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'id'             => 'groups_title_font',
			'headingInherit' => true,
		),
	),
	'groups_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'rebase' ),
		'default'      => webapp()->default( 'groups_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.groups-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.groups-title .base-breadcrumbs a:hover',
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
					'tooltip' => __( 'Link Hover Color', 'rebase' ),
					'palette' => true,
				),
			),
		),
	),
	'groups_title_breadcrumb_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Breadcrumb Font', 'rebase' ),
		'default'      => webapp()->default( 'groups_title_breadcrumb_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.groups-title .base-breadcrumbs',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'groups_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'groups_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Group Above Area Background', 'rebase' ),
		'default'      => webapp()->default( 'groups_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .groups-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Group Title Background', 'rebase' ),
		),
	),
	'groups_title_featured_image' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'sfwd_groups_layout_design',
		'default'      => webapp()->default( 'groups_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'rebase' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
	),
	'groups_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'rebase' ),
		'default'      => webapp()->default( 'groups_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.groups-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Overlay Color', 'rebase' ),
					'palette' => true,
				),
			),
			'allowGradient' => true,
		),
	),
	'groups_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'sfwd_groups_layout_design',
		'label'        => esc_html__( 'Border', 'rebase' ),
		'default'      => webapp()->default( 'groups_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'groups_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'groups_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'groups_title_top_border',
			'border_bottom' => 'groups_title_bottom_border',
		),
		'live_method'     => array(
			'groups_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.groups-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'groups_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.groups-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_sfwd_groups_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Group Layout', 'rebase' ),
		'settings'     => false,
	),
	'info_sfwd_groups_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'sfwd_groups_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Group Layout', 'rebase' ),
		'settings'     => false,
	),
	'groups_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Group Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'groups_layout' ),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'tooltip' => __( 'Normal', 'rebase' ),
					'icon' => 'normal',
				),
				'narrow' => array(
					'tooltip' => __( 'Narrow', 'rebase' ),
					'icon' => 'narrow',
				),
				'fullwidth' => array(
					'tooltip' => __( 'Fullwidth', 'rebase' ),
					'icon' => 'fullwidth',
				),
				'left' => array(
					'tooltip' => __( 'Left Sidebar', 'rebase' ),
					'icon' => 'leftsidebar',
				),
				'right' => array(
					'tooltip' => __( 'Right Sidebar', 'rebase' ),
					'icon' => 'rightsidebar',
				),
			),
			'responsive' => false,
			'class'      => 'base-three-col',
		),
	),
	'groups_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Group Default Sidebar', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'groups_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'groups_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Content Style', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'groups_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-groups',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'tooltip' => __( 'Boxed', 'rebase' ),
					'icon' => 'boxed',
				),
				'unboxed' => array(
					'tooltip' => __( 'Unboxed', 'rebase' ),
					'icon' => 'narrow',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'groups_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'groups_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-groups',
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
	'groups_feature' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'sfwd_groups_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'groups_feature' ),
		'label'        => esc_html__( 'Show Featured Image?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'groups_feature_position' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Featured Image Position', 'rebase' ),
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'groups_feature_position' ),
		'context'      => array(
			array(
				'setting'    => 'groups_feature',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'above' => array(
					'name' => __( 'Above', 'rebase' ),
				),
				'behind' => array(
					'name' => __( 'Behind', 'rebase' ),
				),
				'below' => array(
					'name' => __( 'Below', 'rebase' ),
				),
			),
			'responsive' => false,
		),
	),
	'groups_feature_ratio' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'sfwd_groups_layout',
		'label'        => esc_html__( 'Featured Image Ratio', 'rebase' ),
		'priority'     => 20,
		'default'      => webapp()->default( 'groups_feature_ratio' ),
		'context'      => array(
			array(
				'setting'    => 'groups_feature',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-groups .article-post-thumbnail',
				'pattern'  => 'base-thumbnail-ratio-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'inherit' => array(
					'name' => __( 'Inherit', 'rebase' ),
				),
				'1-1' => array(
					'name' => __( '1:1', 'rebase' ),
				),
				'3-4' => array(
					'name' => __( '4:3', 'rebase' ),
				),
				'2-3' => array(
					'name' => __( '3:2', 'rebase' ),
				),
				'9-16' => array(
					'name' => __( '16:9', 'rebase' ),
				),
				'1-2' => array(
					'name' => __( '2:1', 'rebase' ),
				),
			),
			'responsive' => false,
			'class' => 'base-three-col-short',
		),
	),
	'groups_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'sfwd_groups_layout_design',
		'priority'     => 20,
		'label'        => esc_html__( 'Site Background', 'rebase' ),
		'default'      => webapp()->default( 'groups_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-groups',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Group Background', 'rebase' ),
		),
	),
	'groups_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'sfwd_groups_layout_design',
		'priority'     => 20,
		'label'        => esc_html__( 'Content Background', 'rebase' ),
		'default'      => webapp()->default( 'groups_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single-groups .content-bg, body.single-groups.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Group Content Background', 'rebase' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

