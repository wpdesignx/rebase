<?php
/**
 * Product Layout Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

$settings = array(
	'info_llms_membership_title' => array(
		'control_type' => 'base_title_control',
		'section'      => 'llms_membership_layout',
		'priority'     => 2,
		'label'        => esc_html__( 'Membership Title', 'rebase' ),
		'settings'     => false,
	),
	'llms_membership_title' => array(
		'control_type' => 'base_switch_control',
		'sanitize'     => 'base_sanitize_toggle',
		'section'      => 'llms_membership_layout',
		'priority'     => 3,
		'default'      => webapp()->default( 'llms_membership_title' ),
		'label'        => esc_html__( 'Show Membership Title?', 'rebase' ),
		'transport'    => 'refresh',
	),
	'llms_membership_title_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_layout',
		'label'        => esc_html__( 'Membership Title Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 4,
		'default'      => webapp()->default( 'llms_membership_title_layout' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_title',
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
	'llms_membership_title_inner_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_layout',
		'priority'     => 4,
		'default'      => webapp()->default( 'llms_membership_title_inner_layout' ),
		'label'        => esc_html__( 'Title Container Width', 'rebase' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_title',
				'operator'   => '=',
				'value'      => true,
			),
			array(
				'setting'    => 'llms_membership_title_layout',
				'operator'   => '=',
				'value'      => 'above',
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.llms_membership-hero-section',
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
	'llms_membership_title_align' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_layout',
		'label'        => esc_html__( 'Membership Title Align', 'rebase' ),
		'priority'     => 4,
		'default'      => webapp()->default( 'llms_membership_title_align' ),
		'context'      => array(
			array(
				'setting'    => 'llms_membership_title',
				'operator'   => '=',
				'value'      => true,
			),
		),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => '.llms_membership-title',
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
	'info_llms_membership_layout' => array(
		'control_type' => 'base_title_control',
		'section'      => 'llms_membership_layout',
		'priority'     => 10,
		'label'        => esc_html__( 'Membership Layout', 'rebase' ),
		'settings'     => false,
	),
	'llms_membership_layout' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_layout',
		'label'        => esc_html__( 'Membership Layout', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'llms_membership_layout' ),
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
	'llms_membership_sidebar_id' => array(
		'control_type' => 'base_select_control',
		'section'      => 'llms_membership_layout',
		'label'        => esc_html__( 'Membership Default Sidebar', 'rebase' ),
		'transport'    => 'refresh',
		'priority'     => 10,
		'default'      => webapp()->default( 'llms_membership_sidebar_id' ),
		'input_attrs'  => array(
			'options' => webapp()->sidebar_options(),
		),
	),
	'llms_membership_content_style' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_layout',
		'label'        => esc_html__( 'Content Style', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'llms_membership_content_style' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-llms_membership',
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
	'llms_membership_vertical_padding' => array(
		'control_type' => 'base_radio_icon_control',
		'section'      => 'llms_membership_layout',
		'label'        => esc_html__( 'Content Vertical Padding', 'rebase' ),
		'priority'     => 10,
		'default'      => webapp()->default( 'llms_membership_vertical_padding' ),
		'live_method'     => array(
			array(
				'type'     => 'class',
				'selector' => 'body.single-llms_membership',
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
);

Theme_Customizer::add_settings( $settings );

