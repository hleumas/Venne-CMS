<?php

/**
 * This file is part of the Venne:CMS (https://github.com/Venne)
 *
 * Copyright (c) 2011, 2012 Josef Kříž (http://www.josef-kriz.cz)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace Venne\Config\Extensions;

use Venne;
use Venne\Config\CompilerExtension;

/**
 * @author Josef Kříž <pepakriz@gmail.com>
 */
class AssetExtension extends CompilerExtension
{


	public function loadConfiguration()
	{
		$this->compileManager("Venne\Assets\AssetManager", $this->prefix("assetManager"));

		$this->compileMacro("Venne\Assets\Macros\CssMacro", $this->prefix("cssMacro"));
		$this->compileMacro("Venne\Assets\Macros\JsMacro", $this->prefix("jsMacro"));
	}

}

