<?php
	/**
	* @title			TSIMAP
	* @copyright   		Copyright (C) 2011-2016 Design Studio WWW, All rights reserved.
	* @license   		GNU General Public License version 3 or later.
	* @author url   	http://www.tsi.info.pl
	* @developers   	Design Studio WWW
	*/

	// No direct access
	defined('_JEXEC') or die('Restricted access');
	
	require_once( dirname(__FILE__).'/helper.php' );
	
	$Marker = JUri::root().$params->get('Marker');
	$Zoom = $params->get('Zoom');
	$Latitude = $params->get('Latitude');
	$Longitude = $params->get('Longitude');
	$Height = $params->get('Height');
	$Width = $params->get('Width');
	$Style = $params->get('Style');
	
	
	
	
	
	require( JModuleHelper::getLayoutPath( 'mod_tsimap' ) );
	
	$document = JFactory::getDocument();
	$pathCSS = "modules/mod_contactform/assest/mod_tsimap.css";
	$document->addStyleSheet($pathCSS);
?>