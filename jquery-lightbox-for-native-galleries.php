<?php /*

**************************************************************************

Plugin Name:  jQuery Lightbox For Native Galleries
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/jquery-lightbox-for-native-galleries/
Description:  Makes the native WordPress galleries introduced in WordPress 2.5 use <a href="http://plugins.jquery.com/project/jquerylightbox_bal">jQuery Lightbox by balupton</a> to display the fullsize images.
Version:      1.0.1
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************

Copyright (C) 2008 Viper007Bond

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

**************************************************************************/

class jQueryLightboxForNativeGalleries {

	// Plugin initialization
	function jQueryLightboxForNativeGalleries() {
		if ( is_admin() || !function_exists('plugins_url') ) return;

		wp_enqueue_script( 'jquery-lightbox', plugins_url('/jquery-lightbox-for-native-galleries/jquery_lightbox/js/jquery.lightbox.packed.js'), array('jquery'), '1.2.1-final' );

		add_action( 'wp_head', array(&$this, 'wp_head') );
		add_filter( 'attachment_link', array(&$this, 'attachment_link'), 10, 2 );
	}


	// Output some additional Javascript and CSS
	function wp_head() {
		// Apply the lightbox to all gallery thumbnails
		echo '<script type="text/javascript">jQuery(document).ready(function(){ jQuery(".gallery a").lightbox(); });</script>' . "\n";

		// There's a "bug" with jQuery Lightbox when dealing with images larger than the screen
		// See http://plugins.jquery.com/node/2191
		echo '<style type="text/css" media="screen">#lightbox-imageBox, #lightbox-infoBox { max-width: 99%; } #lightbox-imageBox img { max-width: 100%; }</style>' . "\n";
	}


	// Make the thumbnails link to the fullsize image rather than a Page with the medium sized image
	function attachment_link( $link, $id ) {
		$mimetypes = array( 'image/jpeg', 'image/png', 'image/gif' );

		$post = get_post( $id );

		if ( in_array( $post->post_mime_type, $mimetypes ) )
			return wp_get_attachment_url( $id ); // Try wp_get_attachment_thumb_file() in the future perhaps
		else
			return $link;
	}
}

// Start this plugin once all other plugins are fully loaded
add_action( 'plugins_loaded', create_function( '', 'global $jQueryLightboxForNativeGalleries; $jQueryLightboxForNativeGalleries = new jQueryLightboxForNativeGalleries();' ) );

?>