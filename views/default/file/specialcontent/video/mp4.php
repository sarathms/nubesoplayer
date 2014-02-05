<?php
/**
 * Nubeso player file view override
 * @package nubesoplayer
 */
 
 $mp4 = elgg_get_plugin_setting("mp4", 'nubesoplayer');
 
echo elgg_view("nubesoplayer/$mp4", array('file_guid' => $vars['entity']->getGUID(), 'type' => 'mp4'));
