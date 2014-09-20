<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\upload\migrations;

class install_upload extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['upload_version']) && version_compare($this->config['upload_version'], '3.1.0.RC4', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('upload_version', '3.1.0.RC4')),
			array('module.add', array(
				'acp', 'ACP_EXTENSION_MANAGEMENT', array(
					'module_basename'	=> '\forumhulp\upload\acp\upload_module',
					'auth'				=> 'ext_forumhulp/upload && acl_a_extensions',
					'modes'				=> array('main'),
				),
			)),
		);
	}
}
