<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_homeblock
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_homeblock.content');
}

$modulelink_uri				= $params->get('link_uri', 0, 'int');
$moduleclass_sfx			= htmlspecialchars($params->get('moduleclass_sfx'));
$moduleinnerclass_sfx	= htmlspecialchars($params->get('moduleinnerclass_sfx'));

require JModuleHelper::getLayoutPath('mod_homeblock', $params->get('layout', 'default'));
