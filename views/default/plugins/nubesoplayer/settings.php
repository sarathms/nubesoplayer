<?php
// set default values
if (!isset($vars['entity']->mp4)) {
	$vars['entity']->mp4 = "video-js"; // select player for mp4 videos.
}

/**
Settings
*/
//select player for mp4 videos.
echo '<div>';
echo elgg_echo('nubesoplayer:mp4player');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[mp4]',
	'options_values' => array(
				  'video-js' => elgg_echo('nubesoplayer:video-js'),
				  'flowplayer' => elgg_echo('nubesoplayer:flowplayer')
				  ),
	'value' => $vars['entity']->mp4,
));
echo '</div>';


