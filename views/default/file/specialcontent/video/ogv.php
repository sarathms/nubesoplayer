<?php
/**
 * Nubeso player file view override
 * @package nubesoplayer
 */
echo elgg_view('nubesoplayer/video-js', array('file_guid' => $vars['entity']->getGUID(), 'type' => 'ogv'));
