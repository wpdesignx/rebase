/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
const { Fragment } = wp.element;
import map from 'lodash/map';
const { withFilters, TabPanel, Panel, PanelBody, PanelRow, Button } = wp.components;

export const CustomizerLinks = () => {
	const headerLinks = [
		{
			title: __( 'Global Colors', 'rebase' ),
			description: __( 'Set the theme global colors, button and background colors.', 'rebase' ),
			focus: 'base_customizer_general_colors',
			type: 'section',
			setting: false
		},
		{
			title: __( 'Logo & Favicon', 'rebase' ),
			description: __( 'Upload your logo and favicon, set title and logo layout.', 'rebase' ),
			focus: 'title_tagline',
			type: 'section',
			setting: false
		},
		{
			title: __( 'Typography', 'rebase' ),
			description: __( 'Select the perfect font family, style, weight, color and sizes.', 'rebase' ),
			focus: 'base_customizer_general_typography',
			type: 'section',
			setting: false
		},
		{
			title: __( 'Header Layout', 'rebase' ),
			description: __( 'Set the header layout, elements, colors, alignment and more.', 'rebase' ),
			focus: 'base_customizer_header',
			type: 'panel',
			setting: false
		},
		{
			title: __( 'Page Layout', 'rebase' ),
			description: __( 'Set the page width, page title, content style, spacing and more.', 'rebase' ),
			focus: 'base_customizer_page_layout',
			type: 'section',
			setting: false
		},
		{
			title: __( 'Footer Layout', 'rebase' ),
			description: __( 'Set the footer layout, footer columns, widgets, colors and more.', 'rebase' ),
			focus: 'base_customizer_footer_layout',
			type: 'section',
			setting: false
		},
	];
	return (
		<Fragment>
			<h2 className="section-header">{ __( 'Customize Your Site', 'rebase' ) }</h2>
			<div className="two-col-grid">
				{ map( headerLinks, ( link ) => {
					return (
						<div className="link-item">
							<h4>{ link.title }</h4>
							<p>{ link.description }</p>
							<div className="link-item-foot">
								<a href={ `${baseDashboardParams.adminURL}customize.php?autofocus%5B${ link.type }%5D=${ link.focus }` }>
									{ __( 'Customize', 'rebase') }
								</a>
							</div>
						</div>
					);
				} ) }
			</div>
		</Fragment>
	);
};

export default withFilters( 'base_theme_customizer' )( CustomizerLinks );