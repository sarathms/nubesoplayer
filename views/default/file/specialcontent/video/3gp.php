<?php
/**
 * Nubeso player file view override
 * @package nubesoplayer
 */
echo elgg_view('nubesoplayer/flowplayer', array('file_guid' => $vars['entity']->getGUID()));
