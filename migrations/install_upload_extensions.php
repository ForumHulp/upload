<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\upload_extensions\migrations;

class install_upload_extensions extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['upload_extensions_version']) && version_compare($this->config['upload_extensions_version'], '3.1.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('upload_extensions_version', '3.1.0')),
			array('module.add', array(
				'acp', 'ACP_EXTENSION_MANAGEMENT', array(
					'module_basename'	=> '\forumhulp\upload_extensions\acp\upload_extensions_module',
					'auth'				=> 'ext_forumhulp/upload_extensions && acl_a_extensions',
					'modes'				=> array('main'),
				),
			)),
		);
	}
}
