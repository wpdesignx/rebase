/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
const { Fragment } = wp.element;

export const RecommendedTab = () => {
	return (
		<Fragment>
			<p>{ __( 'This area is for Recommended Plugins.', 'rebase' ) }</p>
		</Fragment>
	);
};

export default RecommendedTab;