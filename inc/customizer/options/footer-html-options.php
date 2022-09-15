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
$settings        = array(
	'footer_html_tabs' => array(
		'control_type' => 'base_blank_control',
		'section'      => 'footer_html',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_tabs,
	),
	'footer_html_content' => array(
		'control_type' => 'base_editor_control',
		'sanitize'     => 'wp_kses_post',
		'section'      => 'footer_html',
		'description'  => esc_html__( 'Available Placeholders: {copyright} {year} {site-title} {theme-credit}', 'rebase' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'footer_html_content' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'input_attrs'  => array(
			'id' => 'footer_html',
		),
		'partial'      => array(
			'selector'            => '.footer-html',
			'container_inclusive' => true,
			'render_callback'     => 'Base\footer_html',
		),
	),
	'footer_html_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'footer_html',
		'label'        => esc_html__( 'Content Align', 'rebase' ),
		'priority'     => 5,
		'default'      => webapp()->default( 'footer_html_align' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.site-info',
				'pattern'  => array(
					'desktop' => 'content-align-$',
					'tablet'  => 'content-tablet-align-$',
					'mobile'  => 'content-mobile-align-$',
				),
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
			'responsive' => true,
		),
	),
	'footer_html_vertical_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'footer_html',
		'label'        => esc_html__( 'Content Vertical Align', 'rebase' ),
		'priority'     => 5,
		'default'      => webapp()->default( 'footer_html_vertical_align' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'general',
			),
		),
		'live_method'  => array(
			array(
				'type'     => 'class',
				'selector' => '.site-info',
				'pattern'  => array(
					'desktop' => 'content-valign-$',
					'tablet'  => 'content-tablet-valign-$',
					'mobile'  => 'content-mobile-valign-$',
				),
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
			'responsive' => true,
		),
	),
	'footer_html_typography' => array(
		'control_type' => 'base_typography_control',
		'section'      => 'footer_html',
		'label'        => esc_html__( 'Font', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'default'      => webapp()->default( 'footer_html_typography' ),
		'live_method'     => array(
			array(
				'type'     => 'css_typography',
				'selector' => '#colophon .footer-html',
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
			'id' => 'footer_html_typography',
		),
	),
	'footer_html_link_color' => array(
		'control_type' => 'base_color_control',
		'section'      => 'footer_html',
		'label'        => esc_html__( 'Link Colors', 'rebase' ),
		'default'      => webapp()->default( 'footer_html_link_color' ),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#colophon .site-footer-row-container .site-footer-row .footer-html a',
				'property' => 'color',
				'pattern'  => '$',
				'key'      => 'color',
			),
			array(
				'type'     => 'css',
				'selector' => '#colophon .site-footer-row-container .site-footer-row .footer-html a:hover',
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
	'footer_html_link_style' => array(
		'control_type' => 'base_select_control',
		'section'      => 'footer_html',
		'default'      => webapp()->default( 'footer_html_link_style' ),
		'label'        => esc_html__( 'Link Style', 'rebase' ),
		'input_attrs'  => array(
			'options' => array(
				'normal' => array(
					'name' => __( 'Underline', 'rebase' ),
				),
				'plain' => array(
					'name' => __( 'No Underline', 'rebase' ),
				),
			),
		),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '#colophon .footer-html',
				'pattern'  => 'inner-link-style-$',
				'key'      => '',
			),
		),
	),
	'footer_html_margin' => array(
		'control_type' => 'base_measure_control',
		'section'      => 'footer_html',
		'priority'     => 10,
		'default'      => webapp()->default( 'footer_html_margin' ),
		'label'        => esc_html__( 'Margin', 'rebase' ),
		'context'      => array(
			array(
				'setting' => '__current_tab',
				'value'   => 'design',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'css',
				'selector' => '#colophon .footer-html',
				'property' => 'margin',
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

