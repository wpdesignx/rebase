<?php
/**
 * Header Main Row Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'search_archive_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'search',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'search',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'search_design',
			),
			'active' => 'general',
		),
	),
	'search_archive_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'search_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'search',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'search_design',
			),
			'active' => 'design',
		),
	),
	'info_search_archive_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'search',
		'priority'     => 2,
		'label'        => esc_html__( 'Search Results Title', 'rebase' ),
		'settings'     => false,
	),
	'info_search_archive_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'search_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Search Results Title', 'rebase' ),
		'settings'     => false,
	),
	'search_archive_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'search',
		'priority'     => 3,
		'default'      => webapp()->default( 'search_archive_title' ),
		'label'        => esc_html__( 'Show Search Results Title?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'search_archive_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'search',
		'label'        => esc_html__( 'Search Results Title Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'search_archive_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'search_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'name' => __( 'In Content', 'rebase' ),
					'icon'    => 'incontent',
				),
				'above' => array(
					'name' => __( 'Above Content', 'rebase' ),
					'icon'    => 'abovecontent',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'search_archive_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'search',
		'priority'     => 4,
		'default'      => webapp()->default( 'search_archive_title_inner_layout' ),
		'label'        => esc_html__( 'Container Width', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'search_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'search_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.search-archive-hero-section',
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
	'search_archive_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'search',
		'label'        => esc_html__( 'Search Results Title Align', 'rebase' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'search_archive_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'search_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.search-archive-title',
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
	'search_archive_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'search',
		'priority'     => 5,
		'label'        => esc_html__( 'Container Min Height', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'search_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'search_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .search-archive-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'search_archive_title_height' ),
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
	'search_archive_title_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Title Color', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_title_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.search-archive-title h1',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'input_attrs'  => array(
			'colors' => array(
				'color' => array(
					'tooltip' => __( 'Color', 'rebase' ),
					'palette' => true,
				),
			),
		),
	),
	'search_archive_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Archive Title Background', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'search_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'search_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .search-archive-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Post Title Background', 'rebase' ),
		),
	),
	'search_archive_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Background Overlay Color', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.search-archive-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'search_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'search_archive_title_layout',
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
	'search_archive_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Border', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'search_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'search_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'search_archive_title_top_border',
			'border_bottom' => 'search_archive_title_bottom_border',
		),
		'live_method'     => array(
			'search_archive_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.search-archive-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'search_archive_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.search-archive-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_search_archive_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'search',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'rebase' ),
		'settings'     => false,
	),
	'info_search_archive_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'search_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'rebase' ),
		'settings'     => false,
	),
	'search_archive_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'search',
		'label'        => esc_html__( 'Archive Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'search_archive_layout' ),
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
	'search_archive_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'search',
		'label'        => esc_html__( 'Post Archive Default Sidebar', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'search_archive_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'search_archive_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'search',
		'label'        => esc_html__( 'Content Style', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'search_archive_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.search-results',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'tooltip' => __( 'Boxed', 'rebase' ),
					'icon' => 'gridBoxed',
					'name' => __( 'Boxed', 'rebase' ),
				),
				'unboxed' => array(
					'tooltip' => __( 'Unboxed', 'rebase' ),
					'icon' => 'gridUnboxed',
					'name' => __( 'Unboxed', 'rebase' ),
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'search_archive_columns' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'search',
		'priority'     => 10,
		'label'        => esc_html__( 'Search Result Columns', 'rebase' ),
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'search_archive_columns' ),
		'input_attrs'  => array(
			'layout' => array(
				'1' => array(
					'name' => __( '1', 'rebase' ),
				),
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
	'search_archive_item_image_placement' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'search',
		'label'        => esc_html__( 'Item Image Placement', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'search_archive_item_image_placement' ),
		'context'      => array(
			array(
				'setting' => 'search_archive_columns',
				'operator'   => '=',
				'value'   => '1',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.search-archive.grid-cols',
				'pattern'  => 'item-image-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'beside' => array(
					'name' => __( 'Beside', 'rebase' ),
				),
				'above' => array(
					'name' => __( 'Above', 'rebase' ),
				),
			),
			'responsive' => false,
		),
	),
	'info_search_archive_item_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'search',
		'priority'     => 12,
		'label'        => esc_html__( 'Search Item Layout', 'rebase' ),
		'settings'     => false,
	),
	'search_archive_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'search',
		'priority'     => 12,
		'default'      => webapp()->default( 'search_archive_elements' ),
		'label'        => esc_html__( 'Search Item Elements', 'rebase' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'   => 'search_archive_elements',
			'feature'    => 'search_archive_element_feature',
			'categories' => 'search_archive_element_categories',
			'title'      => 'search_archive_element_title',
			'meta'       => 'search_archive_element_meta',
			'excerpt'    => 'search_archive_element_excerpt',
			'readmore'   => 'search_archive_element_readmore',
		),
		'input_attrs'  => array(
			'groupe'   => 'search_archive_elements',
			'sortable' => false,
			'defaults' => array(
				'feature'    => webapp()->default( 'search_archive_element_feature' ),
				'categories' => webapp()->default( 'search_archive_element_categories' ),
				'title'      => webapp()->default( 'search_archive_element_title' ),
				'meta'       => webapp()->default( 'search_archive_element_meta' ),
				'excerpt'    => webapp()->default( 'search_archive_element_excerpt' ),
				'readmore'   => webapp()->default( 'search_archive_element_readmore' ),
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
	'search_archive_item_title_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Search Item Title Font', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_item_title_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => 'body.search-results .loop-entry h2.entry-title',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'             => 'search_archive_item_title_font',
			'headingInherit' => true,
		),
	),
	'search_archive_item_category_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Item Category Colors', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_item_category_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => 'body.search-results .loop-entry .entry-taxonomies, .loop-entry .entry-taxonomies a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => 'body.search-results .loop-entry .entry-taxonomies a:hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
			array(
				'type'     => 'css',
				'selector' => 'body.search-results .loop-entry .entry-taxonomies .category-style-pill a',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => 'body.search-results .loop-entry .entry-taxonomies .category-style-pill a:hover',
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
	'search_archive_item_category_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Item Category Font', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_item_category_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => 'body.search-results .loop-entry .entry-taxonomies',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'search_archive_item_category_font',
			'options' => 'no-color',
		),
	),
	'search_archive_item_meta_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Item Meta Colors', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_item_meta_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => 'body.search-results .loop-entry .entry-meta',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => 'body.search-results .loop-entry .entry-meta a:hover',
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
	'search_archive_item_meta_font' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Item Meta Font', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_item_meta_font' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => 'body.search-results .loop-entry .entry-meta',
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id'      => 'search_archive_item_meta_font',
			'options' => 'no-color',
		),
	),
	'search_archive_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Site Background', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.search-results',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Search Results Background', 'rebase' ),
		),
	),
	'search_archive_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'search_design',
		'label'        => esc_html__( 'Content Background', 'rebase' ),
		'default'      => webapp()->default( 'search_archive_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.search-results .content-bg, body.search-results.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Search Results Content Background', 'rebase' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

