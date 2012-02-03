<?php

/**
 * This file is part of the Venne:CMS (https://github.com/Venne)
 *
 * Copyright (c) 2011, 2012 Josef Kříž (http://www.josef-kriz.cz)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace App\CoreModule\AdminModule\ContentModule;

use Venne;

/**
 * @author Josef Kříž <pepakriz@gmail.com>
 */
abstract class BasePresenter extends \Venne\Application\UI\AdminPresenter {


	public function startup()
	{
		parent::startup();
		$this->addPath("Content", $this->link(":Core:Admin:Content:Default:"));
	}

}
