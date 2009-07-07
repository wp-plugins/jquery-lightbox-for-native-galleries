<?php /*

**************************************************************************

Plugin Name:  jQuery Lightbox For Native Galleries
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/jquery-lightbox-for-native-galleries/
Description:  Makes the native WordPress galleries use a lightbox to display the fullsize images.
Version:      2.0.1
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************/

class jQueryLightboxForNativeGalleries {

	// Plugin initialization
	function jQueryLightboxForNativeGalleries() {
		if ( is_admin() || !function_exists('plugins_url') ) return;

		wp_enqueue_script( 'jquery-lightbox-leandro-vieira-pinho', plugins_url('/jquery-lightbox-for-native-galleries/jquery-lightbox/js/jquery.lightbox-0.5.pack.js'), array('jquery'), '0.5' );
		wp_enqueue_style(  'jquery-lightbox-leandro-vieira-pinho', plugins_url('/jquery-lightbox-for-native-galleries/jquery-lightbox/css/jquery.lightbox-0.5.css'), array(), '0.5', 'screen' );

		add_action( 'wp_head', array(&$this, 'wp_head') );
		add_filter( 'attachment_link', array(&$this, 'attachment_link'), 10, 2 );
	}


	// Output the Javascript to create the Lightbox
	function wp_head() { ?>
<!-- jQuery Lightbox For Native Galleries v2.0.1 | http://www.viper007bond.com/wordpress-plugins/jquery-lightbox-for-native-galleries/ -->
<script type="text/javascript">
// <![CDATA[
	jQuery(document).ready(function($){
		$(".gallery").each(function(index, obj){
			$(obj).find("a").lightBox({
				imageLoading:  "<?php echo js_escape( plugins_url('/jquery-lightbox-for-native-galleries/jquery-lightbox/images/lightbox-ico-loading.gif') ); ?>",
				imageBtnClose: "<?php echo js_escape( plugins_url('/jquery-lightbox-for-native-galleries/jquery-lightbox/images/lightbox-btn-close.gif') ); ?>",
				imageBtnPrev:  "<?php echo js_escape( plugins_url('/jquery-lightbox-for-native-galleries/jquery-lightbox/images/lightbox-btn-prev.gif') ); ?>",
				imageBtnNext:  "<?php echo js_escape( plugins_url('/jquery-lightbox-for-native-galleries/jquery-lightbox/images/lightbox-btn-next.gif') ); ?>",
				imageBlank:    "<?php echo js_escape( plugins_url('/jquery-lightbox-for-native-galleries/jquery-lightbox/images/lightbox-blank.gif') ); ?>"
			});
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
add_action( 'init', 'jQueryLightboxForNativeGalleries' );
function jQueryLightboxForNativeGalleries() {
	global $jQueryLightboxForNativeGalleries;
	$jQueryLightboxForNativeGalleries = new jQueryLightboxForNativeGalleries();
}

?>