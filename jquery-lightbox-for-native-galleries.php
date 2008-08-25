<?php /*

**************************************************************************

Plugin Name:  jQuery Lightbox For Native Galleries
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/jquery-lightbox-for-native-galleries/
Description:  Makes the native WordPress galleries introduced in WordPress 2.5 use <a href="http://plugins.jquery.com/project/jquerylightbox_bal">jQuery Lightbox by balupton</a> to display the fullsize images.
Version:      1.1.0
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

		wp_enqueue_script( 'jquery-lightbox', plugins_url('/jquery-lightbox-for-native-galleries/jquery_lightbox/js/jquery.lightbox.packed.js?ie6_upgrade=false'), array('jquery'), '1.3.1-rc1' );

		add_action( 'wp_head', array(&$this, 'wp_head') );
		add_filter( 'attachment_link', array(&$this, 'attachment_link'), 10, 2 );
	}


	// Output the Javascript to create the Lightbox
	function wp_head() {
		echo '<script type="text/javascript">jQuery(document).ready(function(){ jQuery(".gallery").each(function(index, obj){ jQuery(obj).find("a").lightbox(); }); });</script>' . "\n";
	}


	// Make the thumbnails link to the fullsize image rather than a Page with the medium sized image
	function attachment_link( $link, $id ) {
		$post = get_post( $id );

		if ( 'image/' == substr( $post->post_mime_type, 0, 6 ) )
			return wp_get_attachment_url( $id );
		else
			return $link;
	}
}

// Start this plugin once all other plugins are fully loaded
add_action( 'plugins_loaded', create_function( '', 'global $jQueryLightboxForNativeGalleries; $jQueryLightboxForNativeGalleries = new jQueryLightboxForNativeGalleries();' ) );

?>