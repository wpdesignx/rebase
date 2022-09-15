<?php
/**
 * Post Layout Options.
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$base_post_settings = array(
	'post_layout_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'post_layout',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'post_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'post_layout_design',
			),
			'active' => 'general',
		),
	),
	'post_layout_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'post_layout_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'post_layout',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'post_layout_design',
			),
			'active' => 'design',
		),
	),
	'info_post_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'post_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Post Title', 'rebase' ),
		'settings'     => false,
	),
	'info_post_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'post_layout_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Post Title', 'rebase' ),
		'settings'     => false,
	),
	'post_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 3,
		'default'      => webapp()->default( 'post_title' ),
		'label'        => esc_html__( 'Show Post Title?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'post_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Post Title Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'post_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'post_title',
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
	'post_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'post_title_inner_layout' ),
		'label'        => esc_html__( 'Container Width', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'post_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'post_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.post-hero-section',
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
	'post_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Post Title Align', 'rebase' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'post_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'post_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.post-title',
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
	'post_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'post_layout',
		'priority'     => 5,
		'label'        => esc_html__( 'Container Min Height', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'post_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'post_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .post-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'post_title_height' ),
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
	'post_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'post_layout',
		'priority'     => 6,
		'default'      => webapp()->default( 'post_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'rebase' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'   => 'post_title_elements',
			'title'      => 'post_title_element_title',
			'breadcrumb' => 'post_title_element_breadcrumb',
			'meta'       => 'post_title_element_meta',
			'categories' => 'post_title_element_categories',
			'excerpt'    => 'post_title_element_excerpt',
		),
		'input_attrs'  => array(
			'defaults' => array(
				'categories' => webapp()->default( 'post_title_element_categories' ),
				'title'      => webapp()->default( 'post_title_element_title' ),
				'meta'       => webapp()->default( 'post_title_element_meta' ),
				'excerpt'    => webapp()->default( 'post_title_element_excerpt' ),
				'breadcrumb' => webapp()->default( 'post_title_element_breadcrumb' ),
			),
			'dividers' => array(
				'dot' => array(
					'icon' => 'dot',
				),
				'slash' => array(
					'icon' => 'slash',
				),
				'dash' => array(
					'icon' => 'dash',
				),
				'vline' => array(
					'icon' => 'vline',
				),
				'customicon' => array(
					'icon' => 'hours',
				),
			),
		),
	),
	'post_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Post Title Font', 'rebase' ),
		'default'      => webapp()->default( 'post_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.post-title h1',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'post_title_font',
			'headingInherit' => true,
		),
	),
	'post_title_category_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Category Colors', 'rebase' ),
		'default'      => webapp()->default( 'post_title_category_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.post-title .entry-taxonomies, .post-title .entry-taxonomies a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.post-title .entry-taxonomies a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => '.post-title .entry-taxonomies .category-style-pill a',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.post-title .entry-taxonomies .category-style-pill a:hover',
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
					'tooltip' => __( 'Link Hover Color', 'rebase' ),
					'palette' => true,
				),
			),
		),
	),
	'post_title_category_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Category Font', 'rebase' ),
		'default'      => webapp()->default( 'post_title_category_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.post-title .entry-taxonomies, .post-title .entry-taxonomies a',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'post_title_category_font',
			'options' => 'no-color',
		),
	),
	'post_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'rebase' ),
		'default'      => webapp()->default( 'post_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.post-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.post-title .base-breadcrumbs a:hover',
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
	'post_title_breadcrumb_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Breadcrumb Font', 'rebase' ),
		'default'      => webapp()->default( 'post_title_breadcrumb_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.post-title .base-breadcrumbs',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'post_title_breadcrumb_font',
			'options' => 'no-color',
		),
	),
	'post_title_meta_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Meta Colors', 'rebase' ),
		'default'      => webapp()->default( 'post_title_meta_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.post-title .entry-meta',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.post-title .entry-meta a:hover',
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
	'post_title_meta_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Meta Font', 'rebase' ),
		'default'      => webapp()->default( 'post_title_meta_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.post-title .entry-meta',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'post_title_meta_font',
			'options' => 'no-color',
		),
	),
	'post_title_excerpt_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Excerpt Colors', 'rebase' ),
		'default'      => webapp()->default( 'post_title_meta_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.post-title .title-entry-excerpt',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.post-title .title-entry-excerpt a:hover',
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
	'post_title_excerpt_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Excerpt Font', 'rebase' ),
		'default'      => webapp()->default( 'post_title_excerpt_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.post-title .title-entry-excerpt',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'post_title_excerpt_font',
			'options' => 'no-color',
		),
	),
	'post_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Post Title Background', 'rebase' ),
		'default'      => webapp()->default( 'post_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'post_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'post_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .post-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Post Title Background', 'rebase' ),
		),
	),
	'post_title_featured_image' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout_design',
		'default'      => webapp()->default( 'post_title_featured_image' ),
		'label'        => esc_html__( 'Use Featured Image for Background?', 'rebase' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'post_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'post_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
	),
	'post_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Background Overlay Color', 'rebase' ),
		'default'      => webapp()->default( 'post_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.post-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'post_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'post_title_layout',
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
	'post_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Border', 'rebase' ),
		'default'      => webapp()->default( 'post_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'post_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'post_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'post_title_top_border',
			'border_bottom' => 'post_title_bottom_border',
		),
		'live_method'     => array(
			'post_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.post-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'post_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.post-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_post_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'post_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Default Post Layout', 'rebase' ),
		'settings'     => false,
	),
	'info_post_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'post_layout_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Default Post Layout', 'rebase' ),
		'settings'     => false,
	),
	'post_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Default Post Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'post_layout' ),
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
			'class'      => 'base-three-col',
			'responsive' => false,
		),
	),
	'post_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Post Default Sidebar', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'post_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'post_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Content Style', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'post_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single',
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
	'post_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'post_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single',
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
	'post_feature' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'post_feature' ),
		'label'        => esc_html__( 'Show Featured Image?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'post_feature_position' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Featured Image Position', 'rebase' ),
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'post_feature_position' ),
		'context'      => array(
			array(
				'setting'    => 'post_feature',
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
	'post_feature_width' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Featured Image Width', 'rebase' ),
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'post_feature_width' ),
		'context'      => array(
			array(
				'setting'    => 'post_feature',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'post_feature_position',
				'operator'   => '=',
				'value'      => 'behind',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'wide' => array(
					'name' => __( 'Wide', 'rebase' ),
				),
				'full' => array(
					'name' => __( 'Stretch Full', 'rebase' ),
				),
			),
			'responsive' => false,
		),
	),
	'post_feature_caption' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'post_feature_caption' ),
		'label'        => esc_html__( 'Show Featured Image Caption?', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'post_feature',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'post_feature_position',
				'operator'   => '!=',
				'value'      => 'behind',
			),
		),
		'transport'    => 'refresh',
	),
	'post_feature_ratio' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Featured Image Ratio', 'rebase' ),
		'priority'     => 20,
		'default'      => webapp()->default( 'post_feature_ratio' ),
		'context'      => array(
			array(
				'setting'    => 'post_feature',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single .article-post-thumbnail',
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
	'post_tags' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'post_tags' ),
		'label'        => esc_html__( 'Show Post Tags?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'post_footer_area_boxed' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'post_footer_area_boxed' ),
		'label'        => esc_html__( 'Show Footer Area in Boxed Mode?', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'post_content_style',
				'operator'   => '=',
				'value'      => 'boxed',
			),
		),
	),
	'post_author_box' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'post_author_box' ),
		'label'        => esc_html__( 'Show Post Author Box?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'post_author_box_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'label'        => esc_html__( 'Author Box Style', 'rebase' ),
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'post_author_box_style' ),
		'context'      => array(
			array(
				'setting'    => 'post_author_box',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'name' => __( 'Normal', 'rebase' ),
				),
				'center' => array(
					'name' => __( 'Center', 'rebase' ),
				),
			),
			'responsive' => false,
		),
	),
	'post_author_box_link' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'post_author_box_link' ),
		'label'        => esc_html__( 'Use Author Archive Link?', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'post_author_box',
				'operator'   => '=',
				'value'      => true,
			),
		),
	),
	'post_navigation' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'post_navigation' ),
		'label'        => esc_html__( 'Show Post Navigation?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'post_related' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'post_related' ),
		'label'        => esc_html__( 'Show Related Posts?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'post_related_columns' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'post_layout',
		'priority'     => 20,
		'label'        => esc_html__( 'Related Posts Columns', 'rebase' ),
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'post_related_columns' ),
		'context'      => array(
			array(
				'setting'    => 'post_related',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'2' => array(
					'name' => __( '2', 'rebase' ),
				),
				'3' => array(
					'name' => __( '3', 'rebase' ),
				),
				'4' => array(
					'name' => __( '4', 'rebase' ),
				),
			),
			'responsive' => false,
		),
	),
	'post_related_carousel_loop' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'post_related_carousel_loop' ),
		'label'        => esc_html__( 'Endlessly Loop Related Carousel?', 'rebase' ),
		'transport'    => 'refresh',
		'context'      => array(
			array(
				'setting'    => 'post_related',
				'operator'   => '=',
				'value'      => true,
			),
		),
	),
	'post_comments' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'default'      => webapp()->default( 'post_comments' ),
		'label'        => esc_html__( 'Show Comments?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'post_comments_date' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'post_layout',
		'priority'     => 20,
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'post_comments_date' ),
		'label'        => esc_html__( 'Show Comment Date?', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'post_comments',
				'operator'   => '=',
				'value'      => true,
			),
		),
	),
	'post_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Site Background', 'rebase' ),
		'default'      => webapp()->default( 'post_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Post Background', 'rebase' ),
		),
	),
	'post_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Content Background', 'rebase' ),
		'default'      => webapp()->default( 'post_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single .content-bg, body.single.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Post Content Background', 'rebase' ),
		),
	),
	'info_post_related_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Related Posts Section', 'rebase' ),
		'settings'     => false,
		'context'      => array(
			array(
				'setting'    => 'post_related',
				'operator'   => '=',
				'value'      => true,
			),
		),
	),
	'post_related_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Related Posts Section Title Font', 'rebase' ),
		'default'      => webapp()->default( 'post_related_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.wp-site-blocks .entry-related h2.entry-related-title',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'post_related_title_font',
			'headingInherit' => true,
		),
		'context'      => array(
			array(
				'setting'    => 'post_related',
				'operator'   => '=',
				'value'      => true,
			),
		),
	),
	'post_related_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'post_layout_design',
		'label'        => esc_html__( 'Related Posts Section Background', 'rebase' ),
		'default'      => webapp()->default( 'post_related_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.single .entry-related',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'post_related',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Related Posts Background', 'rebase' ),
		),
	),
);

Theme_Customizer::add_settings( $base_post_settings );

