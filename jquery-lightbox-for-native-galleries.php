<?php /*

**************************************************************************

Plugin Name:  jQuery Lightbox For Native Galleries
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/jquery-lightbox-for-native-galleries/
Description:  Makes the native WordPress galleries use a lightbox script called <a href="http://colorpowered.com/colorbox/">ColorBox</a> to display the fullsize images.
Version:      3.0.0
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************/

class jQueryLightboxForNativeGalleries {

	// Plugin initialization
	function jQueryLightboxForNativeGalleries() {
		if ( is_admin() || !function_exists('plugins_url') )
			return;

		wp_enqueue_script( 'colorbox', plugins_url( 'colorbox/jquery.colorbox-min.js', __FILE__ ), array( 'jquery' ), '1.3.1' );
		wp_enqueue_style( 'jcolorbox', plugins_url( 'colorbox/colorbox.css', __FILE__ ), array(), '1.3.1', 'screen' );

		add_action( 'wp_head', array(&$this, 'wp_head') );
		add_filter( 'attachment_link', array(&$this, 'attachment_link'), 10, 2 );
	}


	// Output the Javascript to create the Lightbox
	function wp_head() { ?>
<!-- jQuery Lightbox For Native Galleries v3.0.0 | http://www.viper007bond.com/wordpress-plugins/jquery-lightbox-for-native-galleries/ -->
<script type="text/javascript">
// <![CDATA[
	jQuery(document).ready(function($){
		$(".gallery").each(function(index, obj){
			$(obj).find("a").colorbox({rel:$(obj).attr("id"), maxWidth:"100%", maxHeight:"100%"});
		});
	});
// ]]>
</script>
<?php
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

// Start the plugin up
add_action( 'init', 'jQueryLightboxForNativeGalleries', 7 );
function jQueryLightboxForNativeGalleries() {
	global $jQueryLightboxForNativeGalleries;
	$jQueryLightboxForNativeGalleries = new jQueryLightboxForNativeGalleries();
}

?>