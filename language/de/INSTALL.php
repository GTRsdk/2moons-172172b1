<?php

/**
 *  2Moons
 *  Copyright (C) 2011 Jan Kröpke
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
 * @author Jan Kröpke <info@2moons.cc>
 * @copyright 2009 Lucky
 * @copyright 2011 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.5 (2011-07-31)
 * @info $Id: INSTALL.php 2149 2012-03-15 22:24:13Z slaver7 $
 * @link http://code.google.com/p/2moons/
 */

$LNG['back']					= 'Back';
$LNG['continue']				= 'Continue';
$LNG['login']					= 'Login';

$LNG['menu_intro']				= 'Intro';
$LNG['menu_install']			= 'Install';
$LNG['menu_license']			= 'License';

$LNG['title_install']			= 'Installer';

$LNG['intro_lang']				= 'Language';
$LNG['intro_install']			= 'In order to install';
$LNG['intro_welcome']			= 'Welcome to 2Moons!';
$LNG['intro_text']				= '2Moons is one of the best clones of OGame. <br>2Moons is the latest and most stable version Xnova ever developed. 2Moons is conspicuous by its stability, flexibility, dynamism, quality and user friendliness. We always hope to be better than your expectations.<br><br>The installation system will guide you through the installation or upgrade from a previous version to the newest one. If you have any questions or issues, please do not hesitate to ask our developers and supporters.<br> <br>2Moons is an open source project and is licensed under GNU GPL v3. For licensing information, please click in the menu on the appropriate menu option.<br> <br>Before the installation can be started, a small test is made to check whether or not the system is compatible with 2Moons.';

$LNG['licence_head']			= 'License Agreement';
$LNG['licence_desc']			= 'Please read the following License Agreement. Use the scroll bar to view the entire document.';
$LNG['licence_accept']			= 'Do you accept the license terms? You must accept the license terms before installing the software.';
$LNG['licence_need_accept']		= 'In order to proceed with the installation, you must accept the license terms.';

$LNG['req_head']				= 'System Requirements';
$LNG['req_desc']				= 'Before the installation can continue, some tests are performed to the server to ensure that you can install and use 2Moons. Please read the results carefuly and proceed when all required tests have been passed. If you wish to use any of the functions listed under the optional modules, you should make sure those tests pass too.';
$LNG['reg_yes']					= 'Yes';
$LNG['reg_no']					= 'No';
$LNG['reg_found']				= 'Found';
$LNG['reg_not_found']			= 'Not Found';
$LNG['reg_writable']			= 'Writable';
$LNG['reg_not_writable']		= 'Not Writable';
$LNG['reg_file']				= 'File &raquo;%s&laquo; writable?';
$LNG['reg_dir']					= 'Folder &raquo;%s&laquo; writable?';
$LNG['req_php_need']			= 'Installed version of the scripting language &raquo;PHP&laquo;';
$LNG['req_php_need_desc']		= '<strong>Required</strong> — PHP is the server-side language that 2Moons is written in. 2Moons works with 5.2.5 or higher.';
$LNG['reg_gd_need']				= 'Installed version of graphics processing library &raquo;gdlib&laquo;';
$LNG['reg_gd_desc']				= '<strong>Optional</strong> — graphics processing library &raquo;gdlib&laquo; is responsible for dynamic generation of images. Without it, work on some functions of the software will not work.';
$LNG['reg_mysqli_active']		= 'Support &raquo;MySQLi&laquo; Extension';
$LNG['reg_mysqli_desc']			= '<strong> Required</strong> — You must provide support for MySQLi in PHP. If no database modules are shown as being available, you should contact your hosting provider or review the relevant PHP installation documentation for advice.';
$LNG['reg_json_need']			= 'Extention &raquo;JSON&laquo; available?';
$LNG['reg_iniset_need']			= 'PHP Function &raquo;ini_set&laquo; exist?';
$LNG['reg_global_need']			= 'register_globals disabled?';
$LNG['reg_global_desc']			= '2Moons will work if this setting is enabled, but it is recommended for security purposes to disable register_globals in the PHP installation. ';
$LNG['req_ftp_head']			= 'Enter login credentials for GTP';
$LNG['req_ftp_desc']			= 'Please enter your FTP information so 2Moons can automatically fix the problems. Alternatively, you can manually assign write permissions.';
$LNG['req_ftp_host']			= 'Hostname';
$LNG['req_ftp_username']		= 'Username';
$LNG['req_ftp_password']		= 'Password';
$LNG['req_ftp_dir']				= '2Moons installation directory';
$LNG['req_ftp_send']			= 'Send';
$LNG['req_ftp_error_data']		= 'Could not connect to a FTP server with the supplied credentials.';
$LNG['req_ftp_error_dir']		= 'The directory you entered is invalid.';

$LNG['step1_head']				= 'Database configuration';
$LNG['step1_desc']				= '2Moons is compatible with your server. You must now provide information to connect to a MySQL database. Please check the data carefully before proceeding.';
$LNG['step1_mysql_server']		= 'Database hostname or DSN';
$LNG['step1_mysql_port']		= 'Database server port';
$LNG['step1_mysql_dbuser']		= 'Database username';
$LNG['step1_mysql_dbpass']		= 'Database password';
$LNG['step1_mysql_dbname']		= 'Database name';
$LNG['step1_mysql_prefix']		= 'Data table prefix:';

$LNG['step2_prefix_invalid']	= 'The database table prefix may only contain alphabetic characters, numbers, and underscores.';
$LNG['step2_db_error']			= 'Failed to create database tables:';
$LNG['step2_db_no_dbname']		= 'No database name was specified.';
$LNG['step2_db_too_long']		= 'The table prefix is too long. The maximum allowed length is 36 characters.';
$LNG['step2_db_con_fail']		= 'Could not establish connection to the database. Look for details at the bottom of the error message.';
$LNG['step2_config_exists']		= 'config.php already exists!';
$LNG['step2_conf_op_fail']		= 'config.php is not writable!';
$LNG['step2_conf_create']		= 'config.php successfully created...';
$LNG['step2_db_done']			= 'Connection to the database was successful!';

$LNG['step3_head']				= 'Creation of database tables';
$LNG['step3_desc']				= 'The database tables use by 2Moons have been created and populated with some initial values. Go to the next step to complete the installation of 2Moons.';

$LNG['step4_head']				= 'Administrator Account';
$LNG['step4_desc']				= 'The Installation Wizard will now create an administrator account for you. Please enter a username, email address, and password for the administrator account.';
$LNG['step4_admin_name']		= 'Administrator Username:';
$LNG['step4_admin_name_desc']	= 'Please enter a username for the Administrator account that is 3 to 20 characters long.';
$LNG['step4_admin_pass']		= 'Administrator Password:';
$LNG['step4_admin_pass_desc']	= 'Please enter a password for the Administrator account that is 6 to 30 characters long.';
$LNG['step4_admin_mail']		= 'Email Address:';

$LNG['step6_head']				= 'Congratulations!';
$LNG['step6_desc']				= 'You have successfully installed 2Moons.';
$LNG['step6_info_head']			= 'Start with 2Moons by';
$LNG['step6_info_additional']	= 'If you click on the button below, you will e redirected to a form in the admin area. Then you should take some time to get to know the options available.<br/><br/><strong>Please delete the file &raquo;includes/ENABLE_INSTALL_TOOL&laquo; or rename it before you use your game. As long as this file exists, your game is potentialy at risk!</strong>';

$LNG['sql_close_reason']		= 'Game is currently closed';
$LNG['sql_welcome']				= 'Welcome to 2Moons v';

?>
