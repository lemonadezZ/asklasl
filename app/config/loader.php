<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
		'Phalcon\Models' => APP_PATH . '/common/models/',
		'Phalcon'        => APP_PATH . '/common/library/',
		]);

/**
 * Register module classes
 */
$loader->registerClasses([
		'Phalcon\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
//		'Phalcon\Modules\Backend\Module' => APP_PATH . '/modules/backend/Module.php',
		'Phalcon\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
		]);

$loader->register();
