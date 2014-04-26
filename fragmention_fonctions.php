<?php
/**
 * Plugin Fragmention
 * (c) 2014 Fil
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Ajouter la CSS fragmention
 * @param $flux
 * @return string
 */
function fragmention_insert_head_css($flux) {
	static $vu = false;


	if (!$vu) {
		$flux .= '<link rel="stylesheet" type="text/css" href="'.find_in_path('css/fragmention.css').'" media="all" />'."\n";
		$vu = true;
	}
	return $flux;
}

/**
 * Inserer le JS fragmentions
 * @param $flux
 * @return string
 */
function fragmention_insert_head($flux) {
	$flux = fragmention_insert_head_css($flux);
	$flux .= '<script type="text/javascript" src="'.find_in_path('js/fragmention.js').'"></script>'."\n";
	return $flux;
}


?>