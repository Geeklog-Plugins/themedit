<?php
//
// +---------------------------------------------------------------------------+
// | Theme Editor Plugin for Geeklog - The Ultimate Weblog                     |
// +---------------------------------------------------------------------------+
// | config.php                                                                |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2006 - geeklog AT mystral-kk DOT net                        |
// |                                                                           |
// | Constructed with the Universal Plugin                                     |
// | Copyright (C) 2002 by the following authors:                              |
// | Tom Willett                 -    twillett@users.sourceforge.net           |
// | Blaine Lang                 -    langmail@sympatico.ca                    |
// | The Universal Plugin is based on prior work by:                           |
// | Tony Bibbs                  -    tony@tonybibbs.com                       |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//
// $Id: config.php,v 1.1 2006/10/02 06:49:57 kenji Exp $

global $_DB_table_prefix, $_TABLES;

// set Plugin Table Prefix the Same as Geeklogs

$_THM_table_prefix = $_DB_table_prefix;

// Add to $_TABLES array the tables your plugin uses

$_TABLES['thm_contents'] = $_THM_table_prefix . 'thm_contents';

$_THM_CONF = array();

// Plugin info

$_THM_CONF['pi_version'] = '1.0.4';						// Plugin Version
$_THM_CONF['gl_version'] = '1.4.0';						// GL Version plugin for
$_THM_CONF['pi_url']     = 'http://mystral-kk.net/';	// Plugin Homepage

//=========================================================
//  USER CONFIGURATION
//=========================================================

//-------------------------------------
//  Theme names and file names
//-------------------------------------

// Themes to be edited with this plugin
// NOTE: theme names are case-sensitive

$_THM_CONF['allowed_themes'] = array(
	'professional'
);

// Files to be edited with this plugin
// NOTE: file names are case-sensitive

$_THM_CONF['allowed_files'] = array(
	'style.css',
	'header.thtml', 'footer.thtml',
	'leftblocks.thtml', 'blockheader-left.thtml', 'blockfooter-left.thtml',
	'rightblocks.thtml', 'blockheader-right.thtml', 'blockfooter-right.thtml',
	'storytext.thtml', 'featuredstorytext.thtml', 'archivestorytext.thtml',
	'article/article.thtml', 'article/printable.thtml',
	'menuitem.thtml', 'menuitem_last.thtml', 'menuitem_none.thtml',
	'list.thtml', 'listitem.thtml',
	'loginform.thtml',
	'profiles/contactuserform.thtml', 'profiles/contactauthorform.thtml',
	'preferences/profile.thtml', 'users/profile.thtml',
	'search/searchform.thtml', 'search/searchresults.thtml',
	'submit/submitevent.thtml', 'submit/submitloginrequired.thtml',
	'users/newpassword.thtml', 'users/getpasswordform.thtml',
	'users/loginform.thtml', 'users/registrationform.thtml',
	'users/storyrow.thtml', 'users/commentrow.thtml', 
);

// If you'd like to see theme names and file names sorted alphabetically in
// their dropdown list, uncomment the next two lines.

// sort($_THM_CONF['allowed_themes']);
// sort($_THM_CONF['allowed_files']);

// When you add/remove a theme to/from $_THM_CONF['allowed_themes'], or a template
// file to/from $_THM_CONF['allowed_files'], Theme Editor plugin will detect it
// automatically.  When this option is set to 'auto', the plugin will update the data
// stored in databse automatically.  When set to 'manual', the plugin will display
// the information and 'UPDATE database' button.  When set to 'igonore', the plugin
// will do nothing about the change.

$_THM_CONF['resync_database'] = 'manual';

//-------------------------------------
//  Image upload
//-------------------------------------

// If set true, you can upload images to theme/images/* directories

$_THM_CONF['allow_upload'] = true;

// Thumbnail size

$_THM_CONF['image_width']  = 120;	// In pixels

$_THM_CONF['image_height'] = 100;	// In pixels

// Max column number of thumbnails

$_THM_CONF['image_max_col'] = 6;

// Max size of a file for uploading to the web server

$_THM_CONF['upload_max_size'] = 1048576;	// In bytes (1048576 bytes = 1M bytes)

//=========================================================
//  END OF USER CONFIGURATION
//=========================================================

// You won't have to change anything below this line

// Additional themes and files for Geeklog.jp users

if (isset($_CONF['language'])
 && in_array($_CONF['language'], array('japanese', 'japanese_utf-8'))) {
	$_THM_CONF['allowed_themes'][] = 'IvySOHO';
	$_THM_CONF['allowed_themes'][] = 'Geek_and_Loggloo';
	$_THM_CONF['allowed_themes'][] = 'mobile';
	$_THM_CONF['allowed_themes'][] = 'ProfessionalCSS';
	$_THM_CONF['allowed_files'][]  = 'style_jp.css';
	$_THM_CONF['allowed_files'][]  = 'style_forum.css';
}

?>
