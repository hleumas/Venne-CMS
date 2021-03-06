<?php

/**
 * This file is part of the Venne:CMS (https://github.com/Venne)
 *
 * Copyright (c) 2011, 2012 Josef Kříž (http://www.josef-kriz.cz)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace Venne;

use Nette\Diagnostics\Debugger, Nette\Application\Routers\SimpleRouter, Nette\Application\Routers\Route, Nette\Config\Adapters\NeonAdapter;

define('VENNE', TRUE);
define('VENNE_DIR', __DIR__);
define('VENNE_VERSION_ID', '2.0000');
define('VENNE_VERSION_STATE', 'alpha');

require_once __DIR__ . '/Config/Configurator.php';