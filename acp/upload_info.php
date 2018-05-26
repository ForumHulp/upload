<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\upload\acp;

class upload_info
{
	function module()
	{
		return array(
			'filename'    => '\forumhulp\upload\acp\upload_module',
			'title'        => 'ACP_UPLOAD_EXT_TITLE',
			'version'    => '1.0.0',
			'modes'        => array(
				'main'		=> array(
						'title'	=> 'ACP_UPLOAD_EXT_CONFIG_TITLE',
						'auth'	=> 'ext_forumhulp/upload && acl_a_extensions',
						'cat'	=> array('ACP_EXTENSION_MANAGEMENT')
				),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
