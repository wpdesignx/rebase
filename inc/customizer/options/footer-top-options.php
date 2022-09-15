<?php
/**
 * Header Main Row Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

ob_start(); ?>
<div class="base-compontent-tabs nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab base-general-tab base-compontent-tabs-button nav-tab-active" data-tab="general">
		<span><?php esc_html_e( 'General', 'rebase' ); ?></span>
	</a>
	<a href="#" class="nav-tab base-design-tab base-compontent-tabs-button" data-tab="design">
		<span><?php esc_html_e( 'Design', 'rebase' ); ?></span>
	</a>
</div>
<?php
$compontent_tabs = ob_get_clean();
$settings = array(
	'footer_top_tabs' => array(
		'control_type' => 'base_blank_control',
		'section'      => 'footer_top',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_tabs,
	),
	'footer_top_contain' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'footer_top',
		'priority'     => 4,
		'default'      => webapp()->default( 'footer_top_contain' ),
		'label'        => esc_html__( 'Container Width', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.site-top-footer-wrap',
				'pattern'  => array(
					'desktop' => 'site-footer-row-layout-$',
					'tablet'  => 'site-footer-row-tablet-layout-$',
					'mobile'  => 'site-footer-row-mobile-layout-$',
				),
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
		),
	),
	'footer_top_columns' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'footer_top',
		'label'        => esc_html__( 'Columns', 'rebase' ),
		'priority'     => 5,
		//'transport'    => 'refresh',
		'default'      => webapp()->default( 'footer_top_columns' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'partial'      => array(
			'selector'            => '#colophon',
			'container_inclusive' => true,
			'render_callback'     => 'Base\footer_markup',
		),
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
				'5' => array(
					'name' => __( '5', 'rebase' ),
				),
			),
			'responsive' => false,
			'footer'     => 'top',
		),
	),
	'footer_top_layout' => array(
		'control_type' => 'base_row_control',
		'section'      => 'footer_top',
		'label'        => esc_html__( 'Layout', 'rebase' ),
		'priority'     => 5,
		//'transport'    => 'refresh',
		'default'      => webapp()->default( 'footer_top_layout' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.site-top-footer-inner-wrap',
				'pattern'  => array(
					'desktop' => 'site-footer-row-column-layout-$',
					'tablet'  => 'site-footer-row-tablet-column-layout-$',
					'mobile'  => 'site-footer-row-mobile-column-layout-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'responsive' => true,
			'footer'     => 'top',
		),
	),
	'footer_top_collapse' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'footer_top',
		'priority'     => 5,
		'default'      => webapp()->default( 'footer_top_collapse' ),
		'label'        => esc_html__( 'Row Collapse', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
			array(
				'setting'  => '__device',
				'operator' => 'in',
				'value'    => array( 'tablet', 'mobile' ),
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.site-top-footer-inner-wrap',
				'pattern'  => 'ft-ro-collapse-$',
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'normal' => array(
					'name'    => __( 'Left to Right', 'rebase' ),
					'icon'    => '',
				),
				'rtl' => array(
					'name'    => __( 'Right to Left', 'rebase' ),
					'icon'    => '',
				),
			),
			'responsive' => false,
			'footer'     => 'top',
		),
	),
	'footer_top_direction' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'footer_top',
		'priority'     => 5,
		'default'      => webapp()->default( 'footer_top_direction' ),
		'label'        => esc_html__( 'Column Direction', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.site-top-footer-inner-wrap',
				'pattern'  => array(
					'desktop' => 'ft-ro-dir-$',
					'tablet'  => 'ft-ro-t-dir-$',
					'mobile'  => 'ft-ro-m-dir-$',
				),
				'key'      => '',
			),
		),
		'input_attrs'  => array(
			'layout' => array(
				'row' => array(
					'tooltip' => __( 'Left to Right', 'rebase' ),
					'name'    => __( 'Row', 'rebase' ),
					'icon'    => '',
				),
				'column' => array(
					'tooltip' => __( 'Top to Bottom', 'rebase' ),
					'name'    => __( 'Column', 'rebase' ),
					'icon'    => '',
				),
			),
			'responsive' => true,
			'footer'     => 'top',
		),
	),
	'footer_top_column_spacing' => array(
		'control_type' => 'base_range_control',
		'section'      => 'footer_top',
		'priority'     => 5,
		'label'        => esc_html__( 'Column Spacing', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'property' => 'grid-column-gap',
				'selector' => '#colophon .site-top-footer-inner-wrap',
				'pattern'  => '$',
				'key'      => 'size',
			),
			array(
				'type'     => 'css',
				'property' => 'grid-row-gap',
				'selector' => '#colophon .site-top-footer-inner-wrap',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'footer_top_column_spacing' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'     => array(
				'px'  => 200,
				'em'  => 8,
				'rem' => 8,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'   => array( 'px', 'em', 'rem' ),
		),
	),
	'footer_top_widget_spacing' => array(
		'control_type' => 'base_range_control',
		'section'      => 'footer_top',
		'priority'     => 5,
		'label'        => esc_html__( 'Widget Spacing', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'property' => 'margin-bottom',
				'selector' => '.site-top-footer-inner-wrap .widget',
				'pattern'  => '$',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'footer_top_widget_spacing' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'     => array(
				'px'  => 200,
				'em'  => 8,
				'rem' => 8,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'   => array( 'px', 'em', 'rem' ),
		),
	),
	'footer_top_top_spacing' => array(
		'control_type' => 'base_range_control',
		'section'      => 'footer_top',
		'priority'     => 5,
		'label'        => esc_html__( 'Top Spacing', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#colophon .site-top-footer-inner-wrap',
				'pattern'  => '$',
				'property' => 'padding-top',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'footer_top_top_spacing' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'     => array(
				'px'  => 200,
				'em'  => 8,
				'rem' => 8,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'   => array( 'px', 'em', 'rem' ),
		),
	),
	'footer_top_bottom_spacing' => array(
		'control_type' => 'base_range_control',
		'section'      => 'footer_top',
		'priority'     => 5,
		'label'        => esc_html__( 'Bottom Spacing', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#colophon .site-top-footer-inner-wrap',
				'pattern'  => '$',
				'property' => 'padding-bottom',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'footer_top_bottom_spacing' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 0,
				'em'  => 0,
				'rem' => 0,
			),
			'max'     => array(
				'px'  => 200,
				'em'  => 8,
				'rem' => 8,
			),
			'step'    => array(
				'px'  => 1,
				'em'  => 0.01,
				'rem' => 0.01,
			),
			'units'   => array( 'px', 'em', 'rem' ),
		),
	),
	'footer_top_height' => array(
		'control_type' => 'base_range_control',
		'section'      => 'footer_top',
		'priority'     => 5,
		'label'        => esc_html__( 'Min Height', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#colophon .site-top-footer-inner-wrap',
				'pattern'  => '$',
				'property' => 'min-height',
				'key'      => 'size',
			),
		),
		'default'      => webapp()->default( 'footer_top_height' ),
		'input_attrs'  => array(
			'min'     => array(
				'px'  => 10,
				'em'  => 1,
				'rem' => 1,
				'vh'  => 2,
			),
			'max'     => array(
				'px'  => 400,
				'em'  => 12,
				'rem' => 12,
				'vh'  => 40,
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
	'footer_top_widget_title' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'footer_top',
		'label'        => esc_html__( 'Widget Titles', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'default'      => webapp()->default( 'footer_top_widget_title' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.site-top-footer-wrap .site-footer-row-container-inner .widget-title',
				'pattern'  => array(
					'desktop' => '$',
					'tablet'  => '$',
					'mobile'  => '$',
				),
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id' => 'footer_top_widget_title',
		),
	),
	'footer_top_widget_content' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'footer_top',
		'label'        => esc_html__( 'Widget Content', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'default'      => webapp()->default( 'footer_top_widget_content' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '.site-top-footer-wrap .site-footer-row-container-inner',
				'pattern'  => array(
					'desktop' => '$',
					'tablet'  => '$',
					'mobile'  => '$',
				),
				'property' => 'font',
				'key'      => 'typography',
			),
		),
		'input_attrs'  => array(
			'id' => 'footer_top_widget_content',
		),
	),
	'footer_top_link_colors' => array(
		'control_type' => 'base_color_control',
		'section'      => 'footer_top',
		'label'        => esc_html__( 'Link Colors', 'rebase' ),
		'default'      => webapp()->default( 'footer_top_link_colors' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-top-footer-wrap .site-footer-row-container-inner a:not(.button):not(.wp-block-button__link):not(.wp-element-button)',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '.site-footer .site-top-footer-wrap .site-footer-row-container-inner a:not(.button):not(.wp-block-button__link):not(.wp-element-button):hover',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'hover',
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
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
	'footer_top_link_style' => array(
		'control_type' => 'base_select_control',
		'section'      => 'footer_top',
		'default'      => webapp()->default( 'footer_top_link_style' ),
		'label'        => esc_html__( 'Link Style', 'rebase' ),
		'input_attrs'  => array(
			'options' => array(
				'plain' => array(
					'name' => __( 'Underline on Hover', 'rebase' ),
				),
				'normal' => array(
					'name' => __( 'Underline', 'rebase' ),
				),
				'noline' => array(
					'name' => __( 'No Underline', 'rebase' ),
				),
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.site-top-footer-inner-wrap',
				'pattern'  => 'ft-ro-lstyle-$',
				'key'      => '',
			),
		),
	),
	'footer_top_background' => array(
		'control_type' => 'base_background_control',
		'section'      => 'footer_top',
		'label'        => esc_html__( 'Top Row Background', 'rebase' ),
		'default'      => webapp()->default( 'footer_top_background' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_background',
				'selector' => '.site-top-footer-wrap .site-footer-row-container-inner',
				'property' => 'background',
				'pattern'  => '$',
				'key'      => 'base',
			),
		),
		'input_attrs'  => array(
			'tooltip'  => __( 'Top Row Background', 'rebase' ),
		),
	),
	'footer_top_column_border' => array(
		'control_type' => 'base_border_control',
		'section'      => 'footer_top',
		'label'        => esc_html__( 'Column Border', 'rebase' ),
		'default'      => webapp()->default( 'footer_top_column_border' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css_border',
				'selector' => '.site-top-footer-inner-wrap .site-footer-section:not(:last-child):after',
				'pattern'  => '$',
				'property' => 'border-right',
				'pattern'  => '$',
				'key'      => 'border',
			),
		),
	),
	'footer_top_border' => array(
		'control_type' => 'base_borders_control',
		'section'      => 'footer_top',
		'label'        => esc_html__( 'Border', 'rebase' ),
		'default'      => webapp()->default( 'footer_top_border' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'settings'     => array(
			'border_top'    => 'footer_top_top_border',
			'border_bottom' => 'footer_top_bottom_border',
		),
		'live_method'     => array(
			'footer_top_top_border' => array(
				array(
					'type'     => 'css_border',
					'selector' => array(
						'desktop' => '.site-top-footer-wrap .site-footer-row-container-inner',
						'tablet'  => '.site-top-footer-wrap .site-footer-row-container-inner',
						'mobile'  => '.site-top-footer-wrap .site-footer-row-container-inner',
					),
					'pattern'  => array(
						'desktop' => '$',
						'tablet'  => '$',
						'mobile'  => '$',
					),
					'property' => 'border-top',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
			'footer_top_bottom_border' => array( 
				array(
					'type'     => 'css_border',
					'selector' => array(
						'desktop' => '.site-top-footer-wrap .site-footer-row-container-inner',
						'tablet'  => '.site-top-footer-wrap .site-footer-row-container-inner',
						'mobile'  => '.site-top-footer-wrap .site-footer-row-container-inner',
					),
					'pattern'  => array(
						'desktop' => '$',
						'tablet'  => '$',
						'mobile'  => '$',
					),
					'property' => 'border-bottom',
					'pattern'  => '$',
					'key'      => 'border',
				),
			),
		),
	),
	// 'footer_top_top_border' => array(
	// 	'control_type' => 'base_border_control',
	// 	'section'      => 'footer_top',
	// 	'label'        => esc_html__( 'Top Border', 'rebase' ),
	// 	'default'      => webapp()->default( 'footer_top_top_border' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting' => '__current_tab',
	// 			'value'   => 'design',
	// 		),
	// 	),
	// 	'live_method'     => array(
	// 		array(
	// 			'type'     => 'css_border',
	// 			'selector' => array(
	// 				'desktop' => '.site-top-footer-wrap .site-footer-row-container-inner',
	// 				'tablet'  => '.site-top-footer-wrap .site-footer-row-container-inner',
	// 				'mobile'  => '.site-top-footer-wrap .site-footer-row-container-inner',
	// 			),
	// 			'pattern'  => array(
	// 				'desktop' => '$',
	// 				'tablet'  => '$',
	// 				'mobile'  => '$',
	// 			),
	// 			'property' => 'border-top',
	// 			'pattern'  => '$',
	// 			'key'      => 'border',
	// 		),
	// 	),
	// ),
	// 'footer_top_bottom_border' => array(
	// 	'control_type' => 'base_border_control',
	// 	'section'      => 'footer_top',
	// 	'label'        => esc_html__( 'Bottom Border', 'rebase' ),
	// 	'default'      => webapp()->default( 'footer_top_bottom_border' ),
	// 	'context'      => array(
	// 		array(
	// 			'setting' => '__current_tab',
	// 			'value'   => 'design',
	// 		),
	// 	),
	// 	'live_method'     => array(
	// 		array(
	// 			'type'     => 'css_border',
	// 			'selector' => array(
	// 				'desktop' => '.site-top-footer-wrap .site-footer-row-container-inner',
	// 				'tablet'  => '.site-top-footer-wrap .site-footer-row-container-inner',
	// 				'mobile'  => '.site-top-footer-wrap .site-footer-row-container-inner',
	// 			),
	// 			'pattern'  => array(
	// 				'desktop' => '$',
	// 				'tablet'  => '$',
	// 				'mobile'  => '$',
	// 			),
	// 			'property' => 'border-bottom',
	// 			'pattern'  => '$',
	// 			'key'      => 'border',
	// 		),
	// 	),
	// ),
);

Theme_Customizer::add_settings( $settings );

