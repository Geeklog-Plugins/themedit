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

$_THM_CONF['pi_version'] = '1.0.3';						// Plugin Version
$_THM_CONF['gl_version'] = '1.4.0';						// GL Version plugin for
$_THM_CONF['pi_url']     = 'http://mystral-kk.net/';	// Plugin Homepage

// Themes to be edited with this plugin
// NOTE: theme names are case-sensitive

$_THM_CONF['allowed_themes'] = array(
	'professional'
);

// Files to be edited with this plugin
// NOTE: file names are case-sensitive

$_THM_CONF['allowed_files'] = array(
	'header.thtml', 'footer.thtml', 'leftblocks.thtml', 'rightblocks.thtml',
	'blockheader-left.thtml', 'blockfooter-left.thtml',
	'blockheader-right.thtml', 'blockfooter-right.thtml',
	'featuredstorytext.thtml', 'storytext.thtml','archivestorytext.thtml',
	'menuitem.thtml', 'menuitem_last.thtml', 'menuitem_none.thtml',
	'list.thtml','listitem.thtml',
	'loginform.thtml',
	'style.css',
	'article/article.thtml', 'article/printable.thtml',
	'profiles/contactuserform.thtml', 'profiles/contactauthorform.thtml',
	'preferences/profile.thtml',
	'search/searchform.thtml', 'search/searchresults.thtml',
	'submit/submitevent.thtml', 'submit/submitloginrequired.thtml',
	'users/newpassword.thtml', 'users/commentrow.thtml',
	'users/getpasswordform.thtml', 'users/loginform.thtml', 'users/profile.thtml',
	'users/registrationform.thtml', 'users/storyrow.thtml'
);

// Additional themes and files for Geeklog.jp users

if (isset($_CONF['language'])
 && in_array($_CONF['language'], array('japanese', 'japanese_utf-8'))) {
	$_THM_CONF['allowed_themes'][] = 'IvySOHO';
	$_THM_CONF['allowed_files'][]  = 'style_jp.css';
	$_THM_CONF['allowed_files'][]  = 'style_forum.css';
	sort($_THM_CONF['allowed_themes']);
	sort($_THM_CONF['allowed_files']);
}

// When you add/remove a theme to/from $_THM_CONF['allowed_themes'], or a template
// file to/from $_THM_CONF['allowed_files'], Theme Editor plugin will detect it
// automatically.  When this option is set to 'auto', the plugin will update the data
// stored in databse automatically.  When set to 'manual', the plugin will display
// the information and 'UPDATE database' button.  When set to 'igonore', the plugin
// will do nothing about the change.

$_THM_CONF['resync_database'] = 'manual';

?>
