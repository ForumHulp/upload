<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\upload;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		if (!class_exists('forumhulp\helper\helper'))
		{
			$this->container->get('user')->add_lang_ext('forumhulp/upload', 'info_acp_upload');
			trigger_error($this->container->get('user')->lang['FH_HELPER_NOTICE'], E_USER_WARNING);
		}

		if (!$this->container->get('ext.manager')->is_enabled('forumhulp/helper'))
		{
			$this->container->get('ext.manager')->enable('forumhulp/helper');
		}

		return class_exists('forumhulp\helper\helper');
	}

	/**
	 * Overwrite enable_step to enable upload extension
	 * before any included migrations are installed.
	 *
	 * @param mixed $old_state State returned by previous call of this method
	 * @return mixed Returns false after last step, otherwise temporary state
	 * @access public
	 */
	public function enable_step($old_state)
	{
		if (empty($old_state))
		{
			$this->container->get('user')->add_lang_ext('forumhulp/upload', 'info_acp_upload');
			$this->container->get('template')->assign_var('L_EXTENSION_ENABLE_SUCCESS', $this->container->get('user')->lang['EXTENSION_ENABLE_SUCCESS'] .
				(isset($this->container->get('user')->lang['UPLOAD_NOTICE']) ?
				sprintf($this->container->get('user')->lang['UPLOAD_NOTICE'],
						$this->container->get('user')->lang['ACP_CAT_CUSTOMISE'],
						$this->container->get('user')->lang['ACP_EXTENSION_MANAGEMENT'],
						$this->container->get('user')->lang['ACP_UPLOAD_EXT_TITLE'],

						$this->container->get('user')->lang['ACP_CAT_GENERAL'],
						$this->container->get('user')->lang['ACP_SERVER_CONFIGURATION'],
						$this->container->get('user')->lang['ACP_SERVER_SETTINGS']) : ''));
		}
		// Run parent enable step method
		return parent::enable_step($old_state);
	}
}
