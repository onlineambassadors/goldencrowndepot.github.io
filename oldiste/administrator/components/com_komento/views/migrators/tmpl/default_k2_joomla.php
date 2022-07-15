<?php
/**
* @package		Komento
* @copyright	Copyright (C) 2012 Stack Ideas Private Limited. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Komento is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Restricted access');
$componentHelper = Komento::getHelper( 'components' );

if( $componentHelper->isInstalled( 'com_k2' ) ) {

$k2Obj = Komento::loadApplication( 'com_k2' );
$categories = $k2Obj->getCategories();
$selection = $this->renderMultilist( 'category', '', $categories );
?>

<table id="migrator-k2" migrator-type="k2" migration-type="article" class="noshow migratorTable">
	<tr>
		<td width="50%" valign="top">
			<fieldset class="adminform">
			<legend><?php echo JText::_( 'COM_KOMENTO_MIGRATORS_LAYOUT_MAIN' ); ?></legend>
				<table class="migrator-options admintable">
					<tr>
						<td class="key"><span><?php echo JText::_( 'COM_KOMENTO_MIGRATORS_K2_SELECT_CATEGORIES' ); ?></span></td>
						<td><?php echo $selection; ?></td>
					</tr>
					<tr>
						<td class="key"><span><?php echo JText::_( 'COM_KOMENTO_MIGRATORS_SELECT_PUBLISHING_STATE' ); ?></span></td>
						<td>
							<select id="publishingState">
								<option value="inherit"><?php echo JText::_( 'COM_KOMENTO_MIGRATORS_PUBLISHING_STATE_INHERIT' ); ?></option>
								<option value="1"><?php echo JText::_( 'COM_KOMENTO_MIGRATORS_PUBLISHING_STATE_PUBLISHED' ); ?></option>
								<option value="0"><?php echo JText::_( 'COM_KOMENTO_MIGRATORS_PUBLISHING_STATE_UNPUBLISHED' ); ?></option>
							</select>
						</td>
					</tr>
				</table>
				<a href="javascript:void(0);" class="migrateButton button"><?php echo JText::_( 'COM_KOMENTO_MIGRATORS_START_MIGRATE' ); ?></a>
			</fieldset>
		</td>

		<td width="50%" valign="top" class="migratorProgress">
			<?php echo $this->loadTemplate( 'progress' ); ?>
		</td>
	</tr>
</table>
<?php } else { ?>
<table id="migrator-k2" class="noshow adminlist">
	<tr>
		<td><?php echo JText::_( 'COM_KOMENTO_K2_NOT_INSTALLED' ); ?></td>
	</tr>
</table>
<?php } ?>
