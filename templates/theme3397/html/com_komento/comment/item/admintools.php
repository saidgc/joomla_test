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

if( $system->acl->allow( 'edit', $row ) || $system->acl->allow( 'stick', $row ) || ( $row->published == 1 && $system->acl->allow( 'unpublish', $row ) ) || ( $row->published != 1 && $system->acl->allow( 'publish', $row ) ) || $system->acl->allow( 'delete', $row ) ) { ?>
<div class="icons">
	<div class="btn-group pull-right">
		<a href="#" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i><span class="caret"></span></a>
		<ul class="dropdown-menu">
			<!-- Edit Comment span a.kmt-edit -->
			<?php echo $this->fetch( 'comment/item/editbutton.php' ); ?>

			<!-- Stick Comment span a.kmt-stick -->
			<?php echo $this->fetch( 'comment/item/stickbutton.php' ); ?>

			<!-- Unpublish Comment span a.kmt-unpublish -->
			<?php echo $this->fetch( 'comment/item/unpublishbutton.php' ); ?>

			<!-- Delete Comment span a.kmt-delete -->
			<?php echo $this->fetch( 'comment/item/deletebutton.php' ); ?>
		</ul>
	</div>
</div>
<?php } ?>
