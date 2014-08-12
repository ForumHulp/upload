<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\upload_extensions\acp;

class upload_extensions_info
{
    function module()
    {
        return array(
            'filename'    => 'forumhulp\upload_extensions\acp\upload_extensions_module',
            'title'        => 'ACP_UPLOAD_EXT_TITLE',
            'version'    => '1.0.0',
            'modes'        => array(
                'main'		=> array(
            								'title' => 'ACP_UPLOAD_EXT_CONFIG_TITLE',
            								'auth' => 'ext_forumhulp/upload_extensions && acl_a_extensions',
            								'cat' => array('ACP_EXTENSION_MANAGEMENT')
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
