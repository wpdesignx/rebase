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
	'course_archive_tabs' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'course_archive',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'course_archive',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'course_archive_design',
			),
			'active' => 'general',
		),
	),
	'course_archive_tabs_design' => array(
		'control_type' => 'base_tab_control',
		'section'      => 'course_archive_design',
		'settings'     => false,
		'priority'     => 1,
		'input_attrs'  => array(
			'general' => array(
				'label'  => __( 'General', 'rebase' ),
				'target' => 'course_archive',
			),
			'design' => array(
				'label'  => __( 'Design', 'rebase' ),
				'target' => 'course_archive_design',
			),
			'active' => 'design',
		),
	),
	'info_course_archive_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'course_archive',
		'priority'     => 2,
		'label'        => esc_html__( 'Archive Title', 'rebase' ),
		'settings'     => false,
	),
	'info_course_archive_title_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'course_archive_design',
		'priority'     => 2,
		'label'        => esc_html__( 'Archive Title', 'rebase' ),
		'settings'     => false,
	),
	'course_archive_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'course_archive',
		'priority'     => 3,
		'default'      => webapp()->default( 'course_archive_title' ),
		'label'        => esc_html__( 'Show Archive Title?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'course_archive_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'course_archive',
		'label'        => esc_html__( 'Archive Title Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'course_archive_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'course_archive_title',
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
	'course_archive_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'course_archive',
		'priority'     => 4,
		'default'      => webapp()->default( 'course_archive_title_inner_layout' ),
		'label'        => esc_html__( 'Container Width', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'course_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'course_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.course-archive-hero-section',
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
	'course_archive_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'course_archive',
		'label'        => esc_html__( 'Course Title Align', 'rebase' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'course_archive_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'course_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.course-archive-title',
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
	'course_archive_title_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'course_archive',
		'priority'     => 5,
		'label'        => esc_html__( 'Container Min Height', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'course_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'course_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#inner-wrap .course-archive-hero-section .entry-header',
				'property' => 'min-height',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'course_archive_title_height' ),
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
	'course_archive_title_elements' => array(
		'control_type' => 'base_sorter_control',
		'section'      => 'course_archive',
		'priority'     => 6,
		'default'      => webapp()->default( 'course_archive_title_elements' ),
		'label'        => esc_html__( 'Title Elements', 'rebase' ),
		'transport'    => 'refresh',
		'settings'     => array(
			'elements'    => 'course_archive_title_elements',
			'title'       => 'course_archive_title_element_title',
			'breadcrumb'  => 'course_archive_title_element_breadcrumb',
			'description' => 'course_archive_title_element_description',
		),
	),
	'course_archive_title_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'course_archive_design',
		'label'        => esc_html__( 'Title Color', 'rebase' ),
		'default'      => webapp()->default( 'course_archive_title_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.course-archive-title h1',
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
	'course_archive_title_description_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'course_archive_design',
		'label'        => esc_html__( 'Description Colors', 'rebase' ),
		'default'      => webapp()->default( 'course_archive_title_description_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.course-archive-title .archive-description',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.course-archive-title .archive-description a:hover',
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
	'course_archive_title_breadcrumb_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'course_archive_design',
		'label'        => esc_html__( 'Breadcrumb Colors', 'rebase' ),
		'default'      => webapp()->default( 'course_archive_title_breadcrumb_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.course-archive-title .base-breadcrumbs',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.course-archive-title .base-breadcrumbs a:hover',
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
	'course_archive_title_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'course_archive_design',
		'label'        => esc_html__( 'Archive Title Background', 'rebase' ),
		'default'      => webapp()->default( 'course_archive_title_background' ),
		'context'      => array(
			array(
				'setting'    => 'course_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'course_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '#inner-wrap .course-archive-hero-section .entry-hero-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Course Archive Title Background', 'rebase' ),
		),
	),
	'course_archive_title_overlay_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'course_archive_design',
		'label'        => esc_html__( 'Background Overlay Color', 'rebase' ),
		'default'      => webapp()->default( 'course_archive_title_overlay_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.course-archive-hero-section .hero-section-overlay',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'color',
			),
		),
		'context'      => array(
			array(
				'setting'    => 'course_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'course_archive_title_layout',
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
	'course_archive_title_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'course_archive_design',
		'label'        => esc_html__( 'Border', 'rebase' ),
		'default'      => webapp()->default( 'course_archive_title_border' ),
		'context'      => array(
			array(
				'setting'    => 'course_archive_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'course_archive_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'settings'     => array(
			'border_top'    => 'course_archive_title_top_border',
			'border_bottom' => 'course_archive_title_bottom_border',
		),
		'live_method'     => array(
			'course_archive_title_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => '.course-archive-hero-section .entry-hero-container-inner',
					'pattern'  => '$',
					'property' => 'border-top',
					'key'      => 'border',
				),
			),
			'course_archive_title_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => '.course-archive-hero-section .entry-hero-container-inner',
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	'info_course_archive_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'course_archive',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'rebase' ),
		'settings'     => false,
	),
	'info_course_archive_layout_design' => array(
		'control_type' => 'base_title_control',
		'section'      => 'course_archive_design',
		'priority'     => 10,
		'label'        => esc_html__( 'Archive Layout', 'rebase' ),
		'settings'     => false,
	),
	'course_archive_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'course_archive',
		'label'        => esc_html__( 'Archive Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'course_archive_layout' ),
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
	'course_archive_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'course_archive',
		'label'        => esc_html__( 'Content Style', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'course_archive_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.post-type-archive-course',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
			array(
				'type'     => 'class',
				'selector' => 'body.tax-course_cat',
				'pattern'  => 'content-style-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'boxed' => array(
					'tooltip' => __( 'Boxed', 'rebase' ),
					'icon' => 'gridBoxed',
				),
				'unboxed' => array(
					'tooltip' => __( 'Unboxed', 'rebase' ),
					'icon' => 'gridUnboxed',
				),
			),
			'responsive' => false,
			'class'      => 'base-two-col',
		),
	),
	'course_archive_columns' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'course_archive',
		'priority'     => 20,
		'label'        => esc_html__( 'Course Archive Columns', 'rebase' ),
		'transport'    => 'refresh',
		'default'      => webapp()->default( 'course_archive_columns' ),
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
	'course_archive_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'course_archive_design',
		'label'        => esc_html__( 'Site Background', 'rebase' ),
		'default'      => webapp()->default( 'course_archive_background' ),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-course, body.tax-course_cat',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Course Archive Background', 'rebase' ),
		),
	),
	'course_archive_content_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'course_archive_design',
		'label'        => esc_html__( 'Content Background', 'rebase' ),
		'default'      => webapp()->default( 'course_archive_content_background' ),
		'live_method'  => array(
			array(
				'type'     => 'css_background',
				'selector' => 'body.post-type-archive-course .content-bg, body.tax-course_cat .content-bg, body.tax-course_cat.content-style-unboxed .site, body.post-type-archive-course.content-style-unboxed .site',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip' => __( 'Archive Content Background', 'rebase' ),
		),
	),
);

Theme_Customizer::add_settings( $settings );

