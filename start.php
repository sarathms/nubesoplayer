<?php
 /**
 *
 * @package nubesoplayer
 */

elgg_register_event_handler('init', 'system', 'nubesoplayer_init');

function nubesoplayer_init() {

	$js_url = elgg_get_site_url() . 'mod/nubesoplayer/vendor/flowplayer/flowplayer-3.2.6.min.js';
	elgg_register_js('nubesoplayer.flowplayer', $js_url);
	
	$js_url = elgg_get_site_url() . 'mod/nubesoplayer/vendor/video-js/video.js';
	elgg_register_js('nubesoplayer.video-js', $js_url);
	
	$css_url = elgg_get_site_url() . 'mod/nubesoplayer/vendor/video-js/video-js.css';
	elgg_register_css('nubesoplayer-video-js', $css_url);
}
