<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 *
 * Copyright (c) 2004, 2011 David Grudl (http://davidgrudl.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace Venne\Forms\Controls;

use Nette;
use Nette\Forms\Controls\MultiSelectBox;

/**
 * Select box control that allows multiple item selection.
 *
 * @author	 David Grudl
 */
class ManyToMany extends ManyToOne
{


	/**
	 * Returns selected keys.
	 *
	 * @return array
	 */
	public function getValue()
	{
		$allowed = array_keys($this->allowed);
		if ($this->getPrompt()) {
			unset($allowed[0]);
		}
		$data = array();
		$raw = $this->getRawValue();
		foreach ($this->items as $item) {
			if (in_array($item->id, $raw)) {
				$data[] = $item;
			}
		}
		return $data;
	}



	/**
	 * Returns selected keys (not checked).
	 *
	 * @return array
	 */
	public function getRawValue()
	{
		if (is_scalar($this->value)) {
			$value = array($this->value);
		} elseif (!is_array($this->value)) {
			$value = array();
		} else {
			$value = $this->value;
		}

		$res = array();
		foreach ($value as $val) {
			if (is_scalar($val)) {
				$res[] = $val;
			}
		}
		return $res;
	}



	/**
	 * Returns selected values.
	 *
	 * @return array
	 */
	public function getSelectedItem()
	{
		if (!$this->areKeysUsed()) {
			return $this->getValue();
		} else {
			$res = array();
			foreach ($this->getValue() as $value) {
				$res[$value] = $this->allowed[$value];
			}
			return $res;
		}
	}



	/**
	 * Returns HTML name of control.
	 *
	 * @return string
	 */
	public function getHtmlName()
	{
		return parent::getHtmlName() . '[]';
	}



	/**
	 * Generates control's HTML element.
	 *
	 * @return Nette\Utils\Html
	 */
	public function getControl()
	{
		$control = parent::getControl();
		$control->multiple = TRUE;
		return $control;
	}



	public function setValue($values)
	{
		$data = array();
		if ($values instanceof \Traversable) {
			foreach ($values as $value) {
				$data[] = $value->id;
			}
		}
		$this->value = $data;
		return $this;
	}

}
