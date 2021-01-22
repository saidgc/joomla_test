<?php
/**
 * @package         Regular Labs Library
 * @version         20.11.23860
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            http://www.regularlabs.com
 * @copyright       Copyright © 2020 Regular Labs All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory as JFactory;
use Joomla\CMS\Language\Text as JText;
use RegularLabs\Library\ShowOn as RL_ShowOn;
use RegularLabs\Library\StringHelper as RL_String;

if ( ! is_file(JPATH_LIBRARIES . '/regularlabs/autoload.php'))
{
	return;
}

require_once JPATH_LIBRARIES . '/regularlabs/autoload.php';

class JFormFieldRL_ConditionSelection extends \RegularLabs\Library\Field
{
	public $type = 'ConditionSelection';

	protected function getLabel()
	{
		return '';
	}

	protected function getInput()
	{
		$this->value     = (int) $this->value;
		$label           = $this->get('label');
		$param_name      = $this->get('name');
		$use_main_switch = $this->get('use_main_switch', 1);
		$showclose       = $this->get('showclose', 0);

		$html = [];

		if ( ! $label)
		{
			if ($use_main_switch)
			{
				$html[] = $this->closeShowOn();
			}

			$html[] = $this->closeShowOn();

			return '</div>' . implode('', $html);
		}

		$label = RL_String::html_entity_decoder(JText::_($label));

		$html[] = '</div>';

		if ($use_main_switch)
		{
			$html[] = $this->openShowOn('show_conditions:1[OR]show_assignments:1[OR]' . $param_name . ':1,2');
		}

		$class = 'well well-small rl_well';
		if ($this->value === 1)
		{
			$class .= ' alert-success';
		}
		else if ($this->value === 2)
		{
			$class .= ' alert-error';
		}
		$html[] = '<div class="' . $class . '">';
		if ($showclose && JFactory::getUser()->authorise('core.admin'))
		{
			$html[] = '<button type="button" class="close" aria-label="Close">&times;</button>';
		}

		$html[] = '<div class="control-group">';

		$html[] = '<div class="control-label">';
		$html[] = '<label><h4>' . $label . '</h4></label>';
		$html[] = '</div>';

		$html[] = '<div class="controls">';
		$html[] = '<fieldset id="' . $this->id . '"  class="radio btn-group">';

		$onclick = ' onclick="RegularLabsForm.setToggleTitleClass(this, 0)"';
		$html[]  = '<input type="radio" id="' . $this->id . '0" name="' . $this->name . '" value="0"' . (( ! $this->value) ? ' checked="checked"' : '') . $onclick . '>';
		$html[]  = '<label class="rl_btn-ignore" for="' . $this->id . '0">' . JText::_('RL_IGNORE') . '</label>';

		$onclick = ' onclick="RegularLabsForm.setToggleTitleClass(this, 1)"';
		$html[]  = '<input type="radio" id="' . $this->id . '1" name="' . $this->name . '" value="1"' . (($this->value === 1) ? ' checked="checked"' : '') . $onclick . '>';
		$html[]  = '<label class="rl_btn-include" for="' . $this->id . '1">' . JText::_('RL_INCLUDE') . '</label>';

		$onclick = ' onclick="RegularLabsForm.setToggleTitleClass(this, 2)"';
		$onclick .= ' onload="RegularLabsForm.setToggleTitleClass(this, ' . $this->value . ', 7)"';
		$html[]  = '<input type="radio" id="' . $this->id . '2" name="' . $this->name . '" value="2"' . (($this->value === 2) ? ' checked="checked"' : '') . $onclick . '>';
		$html[]  = '<label class="rl_btn-exclude" for="' . $this->id . '2">' . JText::_('RL_EXCLUDE') . '</label>';

		$html[] = '</fieldset>';
		$html[] = '</div>';

		$html[] = '</div>';
		$html[] = '<div class="clearfix"> </div>';

		$html[] = $this->openShowOn($param_name . ':1,2');

		$html[] = '<div><div>';

		return '</div>' . implode('', $html);
	}

	protected function openShowOn($condition = '')
	{
		if ( ! $condition)
		{
			return $this->closeShowon();
		}

		$formControl = $this->get('form', $this->formControl);
		$formControl = $formControl == 'root' ? '' : $formControl;

		return RL_ShowOn::open($condition, $formControl);
	}

	protected function closeShowOn()
	{
		return RL_ShowOn::close();
	}
}
