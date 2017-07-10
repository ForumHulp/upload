<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translated into Swedish by Holger (http://www.maskinisten.net)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPLOAD_EXT_TITLE'			=> 'Ladda upp och aktivera plugins',
	'ACP_UPLOAD_EXT_CONFIG_TITLE'	=> 'Ladda upp plugins',
	'FH_HELPER_NOTICE'			=> 'Forumhulp helper application does not exist!<br />Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> and copy the helper folder to your forumhulp extension folder.',
	'UPLOAD_NOTICE'					=> '<div class="phpinfo"><p class="entry">This extension resides in %1$s » %2$s » %3$s.<br />Upload extensions and unpack and enable them!<br />Config settings are in  %4$s » %5$s » %6$s.</p></div>',
));

// Description of Upload extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Description',
	'DESCRIPTION_NOTICE'	=> 'Extension note',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'CDB on phpbb.com',
			'DESCRIPTION_2'		=> 'Local PC',
			'DESCRIPTION_3'		=> 'Remote server',
			'DESCRIPTION_4'		=> 'Update phpBB extensions',
			'DESCRIPTION_5'		=> 'Update already uploaded extensions.',
		),
		'note' => array(
			'NOTICE_1'			=> 'ZIP files management',
			'NOTICE_2'			=> 'Save zips in a directory of your choice',
			'NOTICE_3'			=> 'Unpack a zip file to install an extension',
			'NOTICE_4'			=> 'Extension Cleaner tool',
			'NOTICE_5'			=> '3.2.1 ready.',
		)
	)
));
