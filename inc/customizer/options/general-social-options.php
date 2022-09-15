<?php
/**
 * Header Builder Options
 *
 * @package Base
 */

namespace Base;

use Base\Theme_Customizer;
use function Base\webapp;
ob_start(); ?>
<div class="base-compontent-description">
<h2><?php echo esc_html__( 'Social Network Links', 'rebase' ); ?></h2>
</div>
<?php
$compontent_description = ob_get_clean();
$settings = array(
	'social_settings' => array(
		'control_type' => 'base_blank_control',
		'section'      => 'general_social',
		'settings'     => false,
		'priority'     => 1,
		'description'  => $compontent_description,
	),
	'facebook_link' => array(
		'control_type' => 'base_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => webapp()->default( 'facebook_link' ),
		'label'        => esc_html__( 'Facebook', 'rebase' ),
	),
	'twitter_link' => array(
		'control_type' => 'base_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => webapp()->default( 'twitter_link' ),
		'label'        => esc_html__( 'Twitter', 'rebase' ),
	),
	'instagram_link' => array(
		'control_type' => 'base_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => webapp()->default( 'instagram_link' ),
		'label'        => esc_html__( 'Instagram', 'rebase' ),
	),
	'youtube_link' => array(
		'control_type' => 'base_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => webapp()->default( 'youtube_link' ),
		'label'        => esc_html__( 'YouTube', 'rebase' ),
	),
	'vimeo_link' => array(
		'control_type' => 'base_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => webapp()->default( 'vimeo_link' ),
		'label'        => esc_html__( 'Vimeo', 'rebase' ),
	),
	'facebook_group_link' => array(
		'control_type' => 'base_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => webapp()->default( 'facebook_group_link' ),
		'label'        => esc_html__( 'Facebook Group', 'rebase' ),
	),
	'pinterest_link' => array(
		'control_type' => 'base_text_control',
		'sanitize'     => 'esc_url_raw',
		'section'      => 'general_social',
		'default'      => webapp()->default( 'pinterest_link' ),
		'label'        => esc_html__( 'Pinterest', 'rebase' ),
	),
	'linkedin_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'linkedin_link' ),
		'label'        => esc_html__( 'Linkedin', 'rebase' ),
	),
	'dribbble_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'dribbble_link' ),
		'label'        => esc_html__( 'Dribbble', 'rebase' ),
	),
	'behance_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'behance_link' ),
		'label'        => esc_html__( 'Behance', 'rebase' ),
	),
	'patreon_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'patreon_link' ),
		'label'        => esc_html__( 'Patreon', 'rebase' ),
	),
	'reddit_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'reddit_link' ),
		'label'        => esc_html__( 'Reddit', 'rebase' ),
	),
	'medium_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'medium_link' ),
		'label'        => esc_html__( 'medium', 'rebase' ),
	),
	'wordpress_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'wordpress_link' ),
		'label'        => esc_html__( 'WordPress', 'rebase' ),
	),
	'github_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'github_link' ),
		'label'        => esc_html__( 'GitHub', 'rebase' ),
	),
	'vk_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'vk_link' ),
		'label'        => esc_html__( 'VK', 'rebase' ),
	),
	'xing_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'xing_link' ),
		'label'        => esc_html__( 'Xing', 'rebase' ),
	),
	'rss_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'rss_link' ),
		'label'        => esc_html__( 'RSS', 'rebase' ),
	),
	'google_reviews_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'google_reviews_link' ),
		'label'        => esc_html__( 'Google Reviews', 'rebase' ),
	),
	'yelp_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'yelp_link' ),
		'label'        => esc_html__( 'Yelp', 'rebase' ),
	),
	'trip_advisor_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'trip_advisor_link' ),
		'label'        => esc_html__( 'Trip Advisor', 'rebase' ),
	),
	'imdb_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'imdb_link' ),
		'label'        => esc_html__( 'IMDB', 'rebase' ),
	),
	'whatsapp_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'whatsapp_link' ),
		'label'        => esc_html__( 'WhatsApp', 'rebase' ),
	),
	'telegram_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'telegram_link' ),
		'label'        => esc_html__( 'Telegram', 'rebase' ),
	),
	'soundcloud_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'soundcloud_link' ),
		'label'        => esc_html__( 'SoundCloud', 'rebase' ),
	),
	'tumblr_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'tumblr_link' ),
		'label'        => esc_html__( 'Tumblr', 'rebase' ),
	),
	'tiktok_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'tiktok_link' ),
		'label'        => esc_html__( 'Tiktok', 'rebase' ),
	),
	'discord_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'discord_link' ),
		'label'        => esc_html__( 'Discord', 'rebase' ),
	),
	'spotify_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'spotify_link' ),
		'label'        => esc_html__( 'Spotify', 'rebase' ),
	),
	'apple_podcasts_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'apple_podcasts_link' ),
		'label'        => esc_html__( 'Apple Podcast', 'rebase' ),
	),
	'flickr_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'flickr_link' ),
		'label'        => esc_html__( 'Flickr', 'rebase' ),
	),
	'500px_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( '500px_link' ),
		'label'        => esc_html__( '500PX', 'rebase' ),
	),
	'bandcamp_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'bandcamp_link' ),
		'label'        => esc_html__( 'Bandcamp', 'rebase' ),
	),
	'anchor_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'anchor_link' ),
		'label'        => esc_html__( 'Anchor', 'rebase' ),
	),
	'email_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'sanitize_text_field',
		'default'      => webapp()->default( 'email_link' ),
		'label'        => esc_html__( 'Email', 'rebase' ),
	),
	'phone_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'sanitize_text_field',
		'default'      => webapp()->default( 'phone_link' ),
		'label'        => esc_html__( 'Phone', 'rebase' ),
	),
	'custom1_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'custom1_link' ),
		'label'        => esc_html__( 'Custom 1', 'rebase' ),
	),
	'custom2_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'custom2_link' ),
		'label'        => esc_html__( 'Custom 2', 'rebase' ),
	),
	'custom3_link' => array(
		'control_type' => 'base_text_control',
		'section'      => 'general_social',
		'sanitize'     => 'esc_url_raw',
		'default'      => webapp()->default( 'custom3_link' ),
		'label'        => esc_html__( 'Custom 3', 'rebase' ),
	),
);

Theme_Customizer::add_settings( $settings );

