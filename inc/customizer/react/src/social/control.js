import SocialComponent from './social-component.js';

export const SocialControl = wp.customize.BaseControl.extend( {
	renderContent: function renderContent() {
		let control = this;
		ReactDOM.render( <SocialComponent control={ control } />, control.container[0] );
	}
} );
