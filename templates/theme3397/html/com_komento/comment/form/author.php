<?php
/**
 * @package		Komento
 * @copyright	Copyright (C) 2012 Stack Ideas Private Limited. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 *
 * Komento is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
$app = JFactory::getApplication('site');
$template = $app->getTemplate(true);
?>
<div class="kmt-author-detail">
	<<?php echo $template->params->get('blogItemHeading', 'h4'); ?> class="heading-style-9">
		<a href="<?php echo Komento::getProfile()->getProfileLink(); ?>">
		<?php echo $system->my->getName(); ?>
		</a>
	</<?php echo $template->params->get('blogItemHeading', 'h4'); ?>>
	<p class="kmt-author-time"><?php echo Komento::getDate()->toFormat('%A, %B %d, %Y') ?></p>
</div>
