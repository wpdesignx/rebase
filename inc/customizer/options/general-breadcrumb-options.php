<?php
/**
 * Breadcrumb Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;

Theme_Customizer::add_settings(
	array(
		'breadcrumb_engine' => array(
			'control_type' => 'base_select_control',
			'section'      => 'breadcrumbs',
			'transport'    => 'refresh',
			'default'      => webapp()->default( 'breadcrumb_engine' ),
			'label'        => esc_html__( 'Breadcrumb Engine', 'rebase' ),
			'input_attrs'  => array(
				'options' => array(
					'' => array(
						'name' => __( 'Default', 'rebase' ),
					),
					'rankmath' => array(
						'name' => __( 'RankMath (must have activated in plugin)', 'rebase' ),
					),
					'yoast' => array(
						'name' => __( 'Yoast (must have activated in plugin)', 'rebase' ),
					),
					'seopress' => array(
						'name' => __( 'SEOPress (must have activated in plugin)', 'rebase' ),
					),
				),
			),
		),
		'breadcrumb_home_icon' => array(
			'control_type' => 'base_switch_control',
			'sanitize'     => 'base_sanitize_toggle',
			'section'      => 'breadcrumbs',
			'default'      => webapp()->default( 'breadcrumb_home_icon' ),
			'label'        => esc_html__( 'Use icon for home?', 'rebase' ),
			'transport'    => 'refresh',
			'context'      => array(
				array(
					'setting'    => 'breadcrumb_engine',
					'operator'   => '=',
					'value'      => '',
				),
			),
		),
	)
);
