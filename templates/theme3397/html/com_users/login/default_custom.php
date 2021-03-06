<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('JHtmlUsers', JPATH_COMPONENT . '/helpers/html/users.php');
JHtml::register('users.spacer', array('JHtmlUsers', 'spacer'));
$app = JFactory::getApplication('site');
$template = $app->getTemplate(true);

$fieldsets = $this->form->getFieldsets();
if (isset($fieldsets['core']))   unset($fieldsets['core']);
if (isset($fieldsets['params'])) unset($fieldsets['params']);

foreach ($fieldsets as $group => $fieldset): // Iterate through the form fieldsets
	$fields = $this->form->getFieldset($group);
	if (count($fields)):
?>
<fieldset id="users-profile-custom" class="users-profile-custom-<?php echo $group;?>">
	<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.?>
  	<<?php echo $template->params->get('categoryItemHeading', 'h4'); ?>><?php echo $this->escape(JText::_($fieldset->label)); ?></<?php echo $template->params->get('categoryItemHeading', 'h4'); ?>>
	<?php endif;?>
	<dl class="dl-horizontal">
	<?php foreach ($fields as $field):
		if (!$field->hidden) :?>
		<dt><?php echo $field->title; ?></dt>
		<dd>
			<?php if (JHtml::isRegistered('users.'.$field->id)):
			echo JHtml::_('users.'.$field->id, $field->value);
			elseif (JHtml::isRegistered('users.'.$field->fieldname)):
			echo JHtml::_('users.'.$field->fieldname, $field->value);
			elseif (JHtml::isRegistered('users.'.$field->type)):
			echo JHtml::_('users.'.$field->type, $field->value);
			else:
			echo JHtml::_('users.value', $field->value);
			endif;?>
		</dd>
		<?php endif;
	endforeach;?>
	</dl>
</fieldset>
<?php endif;
endforeach;?>