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
 * @info $Id: ShowFlyingFleetPage.php 2126 2012-03-11 21:11:32Z slaver7 $
 * @link http://code.google.com/p/2moons/
 */

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) exit;

require_once(ROOT_PATH. 'includes/classes/class.FlyingFleetsTable.php');

function ShowFlyingFleetPage()
{
	global $LNG;
	
	$id	= HTTP::_GP('id', 0);
	if(!empty($id)){
		$lock	= HTTP::_GP('lock', 0);
		$GLOBALS['DATABASE']->query("UPDATE ".FLEETS." SET `fleet_busy` = '".$lock."' WHERE `fleet_id` = '".$id."' AND `fleet_universe` = '".$_SESSION['adminuni']."';");
		
		$SQL	= ($lock == 0) ? "NULL" : "'ADM_LOCK'";
		
		$GLOBALS['DATABASE']->query("UPDATE ".FLEETS_EVENT." SET `lock` = ".$SQL." WHERE `fleetID` = ".$id.";");
	} 
	
	$orderBy		= "fleet_id";

	$fleetResult	= $GLOBALS['DATABASE']->query("SELECT 
	fleet.*,
	event.`lock`,
	COUNT(event.fleetID) as error,
	pstart.name as startPlanetName,
	ptarget.name as targetPlanetName,
	ustart.username as startUserName,
	utarget.username as targetUserName,
	acs.name as acsName
	FROM ".FLEETS." fleet
	LEFT JOIN ".FLEETS_EVENT." event ON fleetID = fleet_id
	LEFT JOIN ".PLANETS." pstart ON pstart.id = fleet_start_id
	LEFT JOIN ".PLANETS." ptarget ON ptarget.id = fleet_end_id
	LEFT JOIN ".USERS." ustart ON ustart.id = fleet_owner
	LEFT JOIN ".USERS." utarget ON utarget.id = fleet_target_owner
	LEFT JOIN ".AKS." acs ON acs.id = fleet_group
	WHERE fleet_universe = ".$_SESSION['adminuni']."
	GROUP BY event.fleetID
	ORDER BY ".$orderBy.";");
	
	$FleetList	= array();
	
	while($fleetRow = $GLOBALS['DATABASE']->fetch_array($fleetResult)) {
		$shipList		= array();
		$shipArray		= array_filter(explode(';', $fleetRow['fleet_array']));
		foreach($shipArray as $ship) {
			$shipDetail		= explode(',', $ship);
			$shipList[$shipDetail[0]]	= $shipDetail[1];
		}
		
		$FleetList[]	= array(
			'fleetID'				=> $fleetRow['fleet_id'],
			'lock'					=> !empty($fleetRow['lock']),
			'count'					=> $fleetRow['fleet_amount'],
			'error'					=> !$fleetRow['error'],
			'ships'					=> $fleetList,
			'state'					=> $fleetRow['fleet_mess'],
			'starttime'				=> _date($LNG['php_tdformat'], $fleetRow['start_time'], $USER['timezone']),
			'arrivaltime'			=> _date($LNG['php_tdformat'], $fleetRow['fleet_start_time'], $USER['timezone']),
			'stayhour'				=> round(($fleetRow['fleet_end_stay'] - $fleetRow['fleet_start_time']) / 3600),
			'staytime'				=> $fleetRow['fleet_start_time'] !== $fleetRow['fleet_end_stay'] ? _date($LNG['php_tdformat'], $fleetRow['fleet_end_stay'], $USER['timezone']) : 0,
			'endtime'				=> _date($LNG['php_tdformat'], $fleetRow['fleet_end_time'], $USER['timezone']),
			'missionID'				=> $fleetRow['fleet_mission'],
			'acsID'					=> $fleetRow['fleet_group'],
			'acsName'				=> $fleetRow['acsName'],
			'startUserID'			=> $fleetRow['fleet_owner'],
			'startUserName'			=> $fleetRow['startUserName'],
			'startPlanetID'			=> $fleetRow['fleet_start_id'],
			'startPlanetName'		=> $fleetRow['startPlanetName'],
			'startPlanetGalaxy'		=> $fleetRow['fleet_start_galaxy'],
			'startPlanetSystem'		=> $fleetRow['fleet_start_system'],
			'startPlanetPlanet'		=> $fleetRow['fleet_start_planet'],
			'startPlanetType'		=> $fleetRow['fleet_start_type'],
			'targetUserID'			=> $fleetRow['fleet_target_owner'],
			'targetUserName'		=> $fleetRow['targetUserName'],
			'targetPlanetID'		=> $fleetRow['fleet_end_id'],
			'targetPlanetName'		=> $fleetRow['targetPlanetName'],
			'targetPlanetGalaxy'	=> $fleetRow['fleet_end_galaxy'],
			'targetPlanetSystem'	=> $fleetRow['fleet_end_system'],
			'targetPlanetPlanet'	=> $fleetRow['fleet_end_planet'],
			'targetPlanetType'		=> $fleetRow['fleet_end_type'],
			'resource'				=> array(
				901	=> $fleetRow['fleet_resource_metal'],
				902	=> $fleetRow['fleet_resource_crystal'],
				903	=> $fleetRow['fleet_resource_deuterium'],
				921	=> $fleetRow['fleet_resource_darkmatter'],
			),
		);
	}
	
	
	$GLOBALS['DATABASE']->free_result($fleetResult);
	
	$template			= new template();
	$template->assign_vars(array(
		'FleetList'			=> $FleetList,
	));
	$template->show('FlyingFleetPage.tpl');
}
?>