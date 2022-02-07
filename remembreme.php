<?php
/**
 * Plugin Name: Remember Me
 * Description: Play song from Coco when checking the Remember Me checkbox on the login screen.
 * Plugin URI: https://gist.github.com/westonruter/86a191a898015f26e603d6594cc282d2
 * Author: Weston Ruter
 * Author URI: https://weston.ruter.net
 * Gist Plugin URI: https://gist.github.com/westonruter/86a191a898015f26e603d6594cc282d2
 */

add_action( '', function() {
	?>
	<script>
	document.addEventListener( 'DOMContentLoaded', function() {
		var checkbox = document.getElementById( 'rememberme' ), coco;
		coco = document.createElement( 'div' );
		coco.style.cssText = 'margin-top:50px; position:relative; width:100%; padding-bottom:57%;';
		coco.innerHTML = '<iframe style="position:absolute; width:100%; height:100%; left:0; top:0;" src="https://www.youtube.com/embed/ImutnoiBixY?autoplay=1&amp;showinfo=0&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
		checkbox.addEventListener( 'click', function() {
			if ( checkbox.checked ) {
				document.getElementById( 'test_db' ).appendChild( coco );
			} else {
				coco.parentNode.removeChild( coco );
			}
		} );
	} );
	</script>
	<?php
} );
