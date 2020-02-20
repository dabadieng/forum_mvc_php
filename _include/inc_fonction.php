<?php 
//affiche le menu HTML
function affiche_menu($menu) {
	foreach($menu as $cle=>$tab) {
		echo "<a href='$tab[0]'><li>$tab[1]</li></a>";
	}
}

//Fonction de callback pour array_map : htmlentities échappe les caractères spéciaux du HTML
function cb_htmlentities($x) {
	return htmlentities($x,ENT_QUOTES,"utf-8");
}

//Fonction de callback pour array_map : échappe les caractères spéciaux du SQL
function cb_mres($x) {
	global $link;
	return mysqli_real_escape_string($link,$x);
}


function hlien(string $module, string $action,string $para="") : string {
	return "index.php?module={$module}&action={$action}{$para}";
}

?>



