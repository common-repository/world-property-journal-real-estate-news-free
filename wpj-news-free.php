<?php
/**
 * Plugin Name: World Property Journal Real Estate News Free
 * Plugin URI:  https://www.worldpropertyjournal.com/wordpress-plugin/
 * Description: Embed real estate news from all over the world on your website. Simply copy/paste the following shortcode where you would like the feed to be displayed: [wpj_news]. View the readme.txt file for more information.
 * Version:     1.0.0
 * Author:      World Property Journal
 * Author URI:  https://worldpropertyjournal.com/
 * Text Domain: wpj-news
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
 

wp_register_script( 'freenews-js', 'https://www.worldpropertyjournal.com/wordpress/feeds/syndicate-all-free.js' , '', '', true );

function render_wpj_news(){  ob_start();
    wp_enqueue_script( 'freenews-js' );
    ?>
    <div id="wpjinsert"></div>
    <?php
return ob_get_clean();}
add_shortcode( 'wpj_news', 'render_wpj_news');

?>
