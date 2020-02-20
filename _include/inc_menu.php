<?php

//$_SESSION["uti_id"] = 3;

if (isset($_SERVER["uti_id"]) and $_SESSION["uti_id"] == 1) {
    $menu = array(
        [hlien("message", "index"), "Message"],
        [hlien("utilisateur", "index"), "Utilisateur"],
        [hlien("profil", "index"), "Profil"],
        [hlien("database", "creer"), "RAZ BDD"],
        [hlien("database", "dataset"), "jeu de données"]
    );
} else {
    $menu = array(
        [hlien("message", "index"), "Message"]
    );
}
?>

<div class="myflexMenu">
    <?php affiche_menu($menu); ?>
</div>