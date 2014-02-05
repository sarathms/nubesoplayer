<?php
/**
 * Nubeso Video Player
 * @package nubesoplayer
 */

elgg_load_js('nubesoplayer.flowplayer');

$swf_url = elgg_get_site_url() . 'mod/nubesoplayer/vendor/flowplayer/flowplayer-3.2.7.swf';
$video_url = elgg_get_site_url() . "mod/file/download.php?file_guid={$vars['file_guid']}";

?>

	<a  
		 href="<?php echo $video_url; ?>"
		 style="display:block;width:540px;height:300px"  
		 id="player"> 
	</a> 
		<!-- this will install flowplayer inside previous A- tag. -->
	<script>
		flowplayer("player", "<?php echo $swf_url; ?>");
	</script>