<?php
/**
 * Header Builder Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

Theme_Customizer::add_settings(
	array(
		'header_cart_tabs' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'cart',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'rebase' ),
					'target' => 'cart',
				),
				'design' => array(
					'label'  => __( 'Design', 'rebase' ),
					'target' => 'cart_design',
				),
				'active' => 'general',
			),
		),
		'header_cart_tabs_design' => array(
			'control_type' => 'base_tab_control',
			'section'      => 'cart_design',
			'settings'     => false,
			'priority'     => 1,
			'input_attrs'  => array(
				'general' => array(
					'label'  => __( 'General', 'rebase' ),
					'target' => 'cart',
				),
				'design' => array(
					'label'  => __( 'Design', 'rebase' ),
					'target' => 'cart_design',
				),
				'active' => 'design',
			),
		),
		'header_cart_label' => array(
			'control_type' => 'base_text_control',
			'section'      => 'cart',
			'sanitize'     => 'sanitize_text_field',
			'priority'     => 6,
			'default'      => webapp()->default( 'header_cart_label' ),
			'label'        => esc_html__( 'Cart Label', 'rebase' ),
			'live_method'     => array(
				array(
					'type'     => 'html',
					'selector' => '.header-mobile-cart-wrap .header-cart-label',
					'pattern'  => '$',
					'key'      => '',
				),
			),
		),
		'header_cart_icon' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'cart',
			'priority'     => 10,
			'default'      => webapp()->default( 'header_cart_icon' ),
			'label'        => esc_html__( 'Cart Icon', 'rebase' ),
			'partial'      => array(
				'selector'            => '.header-cart-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'Base\header_cart',
			),
			'input_attrs'  => array(
				'layout' => array(
					'shopping-bag' => array(
						'icon' => 'shoppingBag',
					),
					'shopping-cart' => array(
						'icon' => 'shoppingCart',
					),
				),
				'responsive' => false,
			),
		),
		'header_cart_style' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'cart',
			'priority'     => 10,
			'default'      => webapp()->default( 'header_cart_style' ),
			'label'        => esc_html__( 'Cart Click Action', 'rebase' ),
			'transport'    => 'refresh',
			'input_attrs'  => array(
				'layout' => array(
					'link' => array(
						'name' => __( 'Link', 'rebase' ),
					),
					'slide' => array(
						'name' => __( 'Popout Cart', 'rebase' ),
					),
					'dropdown' => array(
						'name' => __( 'Dropdown Cart', 'rebase' ),
					),
				),
				'responsive' => false,
			),
		),
		'header_cart_show_total' => array(
			'control_type' => 'base_switch_control',
			'sanitize'     => 'base_sanitize_toggle',
			'section'      => 'cart',
			'priority'     => 6,
			'partial'      => array(
				'selector'            => '.header-cart-wrap',
				'container_inclusive' => true,
				'render_callback'     => 'Base\header_cart',
			),
			'default'      => webapp()->default( 'header_cart_show_total' ),
			'label'        => esc_html__( 'Show Item Total Indicator', 'rebase' ),
		),
		'header_cart_icon_size' => array(
			'control_type' => 'base_range_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Icon Size', 'rebase' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button .base-svg-iconset',
					'property' => 'font-size',
					'pattern'  => '$',
					'key'      => 'size',
				),
			),
			'default'      => webapp()->default( 'header_cart_icon_size' ),
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
		'header_cart_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Colors', 'rebase' ),
			'default'      => webapp()->default( 'header_cart_color' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button:hover',
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
		'header_cart_background' => array(
			'control_type' => 'base_color_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Background', 'rebase' ),
			'default'      => webapp()->default( 'header_cart_background' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button:hover',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'hover',
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Initial Background', 'rebase' ),
						'palette' => true,
					),
					'hover' => array(
						'tooltip' => __( 'Hover Background', 'rebase' ),
						'palette' => true,
					),
				),
			),
		),
		'header_cart_total_color' => array(
			'control_type' => 'base_color_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Total Colors', 'rebase' ),
			'default'      => webapp()->default( 'header_cart_total_color' ),
			'context'      => array(
				array(
					'setting'  => 'header_cart_show_total',
					'operator' => '=',
					'value'    => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button .header-cart-total',
					'property' => 'color',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button:hover .header-cart-total',
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
		'header_cart_total_background' => array(
			'control_type' => 'base_color_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Total Background', 'rebase' ),
			'default'      => webapp()->default( 'header_cart_total_background' ),
			'context'      => array(
				array(
					'setting'  => 'header_cart_show_total',
					'operator' => '=',
					'value'    => true,
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button .header-cart-total',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'color',
				),
				array(
					'type'     => 'css',
					'selector' => '.header-cart-wrap .header-cart-button:hover .header-cart-total',
					'property' => 'background',
					'pattern'  => '$',
					'key'      => 'hover',
				),
			),
			'input_attrs'  => array(
				'colors' => array(
					'color' => array(
						'tooltip' => __( 'Initial Background', 'rebase' ),
						'palette' => true,
					),
					'hover' => array(
						'tooltip' => __( 'Hover Background', 'rebase' ),
						'palette' => true,
					),
				),
			),
		),
		'header_cart_typography' => array(
			'control_type' => 'base_typography_control',
			'section'      => 'cart_design',
			'label'        => esc_html__( 'Cart Label Font', 'rebase' ),
			'context'      => array(
				array(
					'setting'  => 'header_cart_label',
					'operator' => '!empty',
					'value'    => '',
				),
			),
			'default'      => webapp()->default( 'header_cart_typography' ),
			'live_method'     => array(
				array(
					'type'     => 'css_typography',
					'selector' => '.header-cart-wrap .header-cart-button .header-cart-label',
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
				'id'      => 'header_cart_typography',
				'options' => 'no-color',
			),
		),
		'header_cart_padding' => array(
			'control_type' => 'base_measure_control',
			'section'      => 'cart_design',
			'priority'     => 10,
			'default'      => webapp()->default( 'header_cart_padding' ),
			'label'        => esc_html__( 'Cart Padding', 'rebase' ),
			'live_method'     => array(
				array(
					'type'     => 'css',
					'selector' => '.site-header-item .header-cart-wrap .header-cart-inner-wrap .header-cart-button',
					'property' => 'padding',
					'pattern'  => '$',
					'key'      => 'measure',
				),
			),
			'input_attrs'  => array(
				'responsive' => false,
			),
		),
		'header_cart_popup_side' => array(
			'control_type' => 'base_radio_icon_control',
			'section'      => 'cart',
			'priority'     => 20,
			'default'      => webapp()->default( 'header_cart_popup_side' ),
			'label'        => esc_html__( 'Slide-Out Side', 'rebase' ),
			'context'      => array(
				array(
					'setting'    => 'header_cart_style',
					'operator'   => '=',
					'value'      => 'slide',
				),
			),
			'live_method'     => array(
				array(
					'type'     => 'class',
					'selector' => '#cart-drawer',
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
	)
);
