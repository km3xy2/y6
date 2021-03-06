<?php
/**
 * SVG icons related functions and filters
 *
 * @package Dynamico
 */

/**
 * Return SVG markup.
 *
 * @param string $icon SVG icon id.
 * @return string $svg SVG markup.
 */
function dynamico_get_svg( $icon = null ) {
	// Return early if no icon was defined.
	if ( empty( $icon ) ) {
		return;
	}

	// Create SVG markup.
	$svg  = '<svg class="icon icon-' . esc_attr( $icon ) . '" aria-hidden="true" role="img">';
	$svg .= ' <use xlink:href="' . esc_attr( get_parent_theme_file_uri( '/assets/icons/genericons-neue.svg#' ) . $icon ) . '"></use> ';
	$svg .= '</svg>';

	return $svg;
}


/**
 * Add dropdown icon if menu item has children.
 *
 * @param  string $title The menu item's title.
 * @param  object $item  The current menu item.
 * @param  array  $args  An array of wp_nav_menu() arguments.
 * @param  int    $depth Depth of menu item. Used for padding.
 * @return string $title The menu item's title with dropdown icon.
 */
function dynamico_dropdown_icon_to_menu_link( $title, $item, $args, $depth ) {
	if ( 'primary' === $args->theme_location || 'secondary' === $args->theme_location ) {
		foreach ( $item->classes as $value ) {
			if ( 'menu-item-has-children' === $value || 'page_item_has_children' === $value ) {
				$title = $title . dynamico_get_svg( 'expand' );
			}
		}
	}

	return $title;
}
add_filter( 'nav_menu_item_title', 'dynamico_dropdown_icon_to_menu_link', 10, 4 );


/**
 * Return SVG markup for social icons.
 *
 * @param string $icon SVG icon id.
 * @return string $svg SVG markup.
 */
function dynamico_get_social_svg( $icon = null ) {
	// Return early if no icon was defined.
	if ( empty( $icon ) ) {
		return;
	}

	// Create SVG markup.
	$svg  = '<svg class="icon icon-' . esc_attr( $icon ) . '" aria-hidden="true" role="img">';
	$svg .= ' <use xlink:href="' . get_parent_theme_file_uri( '/assets/icons/social-icons.svg#icon-' ) . esc_html( $icon ) . '"></use> ';
	$svg .= '</svg>';

	return $svg;
}


/**
 * Display SVG icons in social links menu.
 *
 * @param  string  $item_output The menu item output.
 * @param  WP_Post $item        Menu item object.
 * @param  int     $depth       Depth of the menu.
 * @param  array   $args        wp_nav_menu() arguments.
 * @return string  $item_output The menu item output with social icon.
 */
function dynamico_social_icons_menu( $item_output, $item, $depth, $args ) {

	// Get supported social icons.
	$social_icons = dynamico_supported_social_icons();

	// Change SVG icon inside social links menu if there is supported URL.
	if ( 'social-header' === $args->theme_location || 'social-header-bar' === $args->theme_location || 'social-footer' === $args->theme_location ) {
		$icon = 'star';
		foreach ( $social_icons as $attr => $value ) {
			if ( false !== strpos( $item_output, $attr ) ) {
				$icon = esc_attr( $value );
			}
		}
		$item_output = str_replace( $args->link_after, '</span>' . dynamico_get_social_svg( $icon ), $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'dynamico_social_icons_menu', 10, 4 );


/**
 * Returns an array of supported social links (URL and icon name).
 *
 * @return array $social_links_icons
 */
function dynamico_supported_social_icons() {
	// Supported social links icons.
	$supported_social_icons = array(
		'500px'           => '500px',
		'amazon'          => 'amazon',
		'apple'           => 'apple',
		'bandcamp'        => 'bandcamp',
		'behance.net'     => 'behance',
		'bitbucket'       => 'bitbucket',
		'codepen'         => 'codepen',
		'deviantart'      => 'deviantart',
		'digg.com'        => 'digg',
		'dribbble'        => 'dribbble',
		'dropbox.com'     => 'dropbox',
		'etsy.com'        => 'etsy',
		'facebook.com'    => 'facebook',
		'feed'            => 'rss',
		'rss'             => 'rss',
		'flickr.com'      => 'flickr',
		'foursquare.com'  => 'foursquare',
		'github.com'      => 'github',
		'instagram.com'   => 'instagram',
		'linkedin.com'    => 'linkedin',
		'mailto:'         => 'envelope',
		'medium.com'      => 'medium-m',
		'meetup.com'      => 'meetup',
		'patreon'         => 'patreon',
		'pinterest'       => 'pinterest-p',
		'getpocket.com'   => 'get-pocket',
		'reddit.com'      => 'reddit-alien',
		'skype.com'       => 'skype',
		'skype:'          => 'skype',
		'slideshare'      => 'slideshare',
		'snapchat.com'    => 'snapchat',
		'soundcloud.com'  => 'soundcloud',
		'spotify.com'     => 'spotify',
		'stumbleupon.com' => 'stumbleupon',
		'telegram'        => 'telegram',
		't.me'            => 'telegram',
		'tumblr.com'      => 'tumblr',
		'twitch.tv'       => 'twitch',
		'twitter.com'     => 'twitter',
		'vimeo.com'       => 'vimeo',
		'vine.co'         => 'vine',
		'vk.com'          => 'vk',
		'whatsapp'        => 'whatsapp',
		'wa.me'           => 'whatsapp',
		'wordpress.org'   => 'wordpress',
		'wordpress.com'   => 'wordpress',
		'xing.com'        => 'xing',
		'yelp.com'        => 'yelp',
		'youtube.com'     => 'youtube',
	);

	return $supported_social_icons;
}
