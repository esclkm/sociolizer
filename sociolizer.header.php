<?php

/** 
 * [BEGIN_COT_EXT]
 * Hooks=header.tags
 * [END_COT_EXT]
 */
 
/**
 * plugin sociolizer for Cotonti Siena
 * 
 * @package sociolizer
 * @version 1.0.0
 * @author esclkm
 * @copyright 
 * @license BSD
 *  */
// Generated by Cotonti developer tool (littledev.ru)
defined('COT_CODE') or die('Wrong URL.');
if ($env['ext'] != 'admin')
{
	require_once cot_incfile('sociolizer', 'plug', 'resources');
	global $sociolizer;
	$SOCIO = '';
	$SOCIO2 = '';
	$soc_href = $_GET;
	unset($soc_href['dc']);
	unset($soc_href['d']);
	$soc_e = empty($soc_href['e']) ? 'index' : $soc_href['e'];
	unset($soc_href['e']);
	foreach ($sociolizer as $key => $val)
	{
		if(!empty($val['s']))
		{
			$SOCIO .= '<script src="'.$val['s'].'" type="text/javascript">'.$val['sp'].'</script>';
		}
		if(!empty($val['h']))
		{
			$SOCIO2 .= cot_rc($val['h'], array(
				'url' => $cfg['mainurl'].'/'.cot_url($soc_e, $soc_href),
				'escaped' => urlencode($cfg['mainurl'].'/'.cot_url($soc_e, $soc_href)),
				'title' => htmlspecialchars($out['fulltitle']),
				'text' => mb_substr(htmlspecialchars($out['meta_desc']), 0, 140)
			)).';';
		}
		
		if(!empty($val['b']))
		{

			$SOCIOLIZER_LINK[strtoupper($key)] = cot_rc($val['b'], array(
				'url' => $cfg['mainurl'].'/'.cot_url($soc_e, $soc_href),
				'escaped' => urlencode($cfg['mainurl'].'/'.cot_url($soc_e, $soc_href)),
				'title' => htmlspecialchars($out['fulltitle']),
				'text' => mb_substr(htmlspecialchars($out['meta_desc']), 0, 140)
			));
		}
	}
	$LAZYLOAD = '<script src="'.$cfg['plugins_dir'].'/sociolizer/js/head.js" type="text/javascript"></script>';
//	cot_rc_add_file($cfg['plugins_dir'].'/sociolizer/js/head.js');
//	cot_rc_link_file();
//	cot_rc_link_footer();
	
	$SOCIO2 = "<script type=\"text/javascript\">\r\n//<![CDATA[\r\n".$SOCIO2."\r\n//]]>\r\n</script>";
	$SOCIOLIZER = $LAZYLOAD.$SOCIO.$SOCIO2;
}
?>