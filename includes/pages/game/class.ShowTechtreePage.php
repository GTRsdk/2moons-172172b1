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
 * @info $Id: class.ShowTechtreePage.php 2126 2012-03-11 21:11:32Z slaver7 $
 * @link http://code.google.com/p/2moons/
 */


class ShowTechtreePage extends AbstractPage
{
	public static $requireModule = MODULE_TECHTREE;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;
		
		$RequeriList	= array();

		$elementID		= array_merge(array(0), $reslist['build'], array(100), $reslist['tech'], array(200), $reslist['fleet'], array(400), $reslist['defense'], array(600), $reslist['officier']);
			
		foreach($elementID as $Element)
		{			
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;
			
			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}
				
				$TechTreeList[$Element]	= $RequeriList;
			}
		}
		
		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
		));

		$this->display('page.techtree.default.tpl');
	}
}
?>