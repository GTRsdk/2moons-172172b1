<?php

/**
 *  2Moons
 *  Copyright (C) 2011  Slaver
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Slaver <slaver7@gmail.com>
 * @copyright 2009 Lucky <lucky@xgproyect.net> (XGProyecto)
 * @copyright 2011 Slaver <slaver7@gmail.com> (Fork/2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.6.1 (2011-11-19)
 * @info $Id: userpic.php 2126 2012-03-11 21:11:32Z slaver7 $
 * @link http://code.google.com/p/2moons/
 */

define('MODE', 'CRON');

define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');

if(!extension_loaded('gd')) {
	clearGIF();
}

require(ROOT_PATH . 'includes/common.php');
$id = HTTP::_GP('id', 0);

if(!isModulAvalible(MODULE_BANNER) || $id == 0) {
	clearGIF();
}

$LANG->GetLangFromBrowser();
$LANG->includeLang(array('L18N', 'BANNER', 'CUSTOM'));

require_once(ROOT_PATH."includes/classes/class.StatBanner.php");

$banner = new StatBanner();
$Data	= $banner->GetData($id);
if(!isset($Data) || !is_array($Data)) {
	clearGIF();
}
	
$ETag	= md5(implode('', $Data));
header('ETag: '.$ETag);

if(isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $ETag) {
	HTTP::sendHeader('HTTP/1.0 304 Not Modified');
	exit;
}

$banner->CreateUTF8Banner($Data);