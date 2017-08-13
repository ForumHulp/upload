<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'ACP_UPLOAD_EXT_TITLE'			=> 'Subir Extensiones',
	'ACP_UPLOAD_EXT_CONFIG_TITLE'	=> 'Subir Extensiones',
	'FH_HELPER_NOTICE'				=> '¡La aplicación Forumhulp helper no existe!<br />Descargar <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> y copie la carpeta helper dentro de la carpeta de extensión forumhulp.',
	'UPLOAD_NOTICE'					=> '<div class="phpinfo"><p class="entry">Está extensión reside en %1$s » %2$s » %3$s.<br />¡Subir extensiones, descomprimir y habilitarlas!<br />Los ajustes de configuración están en %4$s » %5$s » %6$s.</p></div>',
));

// Description of Upload extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Descripción',
	'DESCRIPTION_NOTICE'	=> 'Nota de la extensión',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'CDB en phpBB.com',
			'DESCRIPTION_2'		=> 'PC local',
			'DESCRIPTION_3'		=> 'Servidor remoto',
			'DESCRIPTION_4'		=> 'Actualizar extensiones phpBB',
			'DESCRIPTION_5'		=> 'Actualizar las extensiones ya subidas.',
		),
		'note' => array(
			'NOTICE_1'			=> 'Gestión de archivos ZIP',
			'NOTICE_2'			=> 'Guardar los zips en un directorio de su elección',
			'NOTICE_3'			=> 'Descomprimir un archivo zip para instalar una extensión',
			'NOTICE_4'			=> 'Herramienta de limpieza de extensiones',
			'NOTICE_5'			=> 'Preparado para 3.2.1',
		)
	)
));
