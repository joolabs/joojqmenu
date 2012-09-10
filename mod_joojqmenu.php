<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_menu
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;


require_once dirname(__FILE__).'/helper.php';

$list	= modJQMenuHelper::getList($params);
$app	= JFactory::getApplication();
$menu	= $app->getMenu();
$active	= $menu->getActive();
$active_id = isset($active) ? $active->id : $menu->getDefault()->id;
$path	= isset($active) ? $active->tree : array();
$showAll	= $params->get('showAllChildren');
$class_sfx	= htmlspecialchars($params->get('class_sfx'));

// include css and jquery
$doc =& JFactory::getDocument();
$doc->addStyleSheet( JURI::root().'modules/mod_joojqmenu/css/joojqmenu.css' );
$doc->addScript( 'http://code.jquery.com/jquery-1.7.2.min.js' );
?>
<?php
if(count($list)) {
	require JModuleHelper::getLayoutPath('mod_joojqmenu', $params->get('layout', 'default'));
}
