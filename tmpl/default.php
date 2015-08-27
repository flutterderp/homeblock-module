<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_homeblock
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if($modulelink_uri > 0) : ?>
	<a href="<?php echo JRoute::_('index.php?Itemid=' . (int) $modulelink_uri); ?>">
<?php endif; ?>

		<div class="custom<?php echo $moduleinnerclass_sfx ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage');?>)"<?php endif;?> >
			<?php echo $module->content;?>
		</div>

<?php if($module->link_uri > 0) : ?>
	</a>
<?php endif; ?>
