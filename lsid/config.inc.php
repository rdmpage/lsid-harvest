<?php

// $Id: //

/**
 * @file config.php
 *
 * Global configuration variables (may be added to by other modules).
 *
 */

require_once(dirname(dirname(__FILE__)) . '/config.inc.php');

global $config;

// LSID cache--------------------------------------------------------------------------------------- 
$config['cache_dir'] = dirname(__FILE__) . '/cache';
	
?>