        <h1>Utilisateur n°<?=$id?></h1>
		<form method="post">
            <input type='hidden' name='uti_id' id='uti_id' value='<?= $uti_id ?>'>
            <p>
                <label for='uti_nom'>uti_nom</label>
                <input type='text' name='uti_nom' id='uti_nom' required value='<?= htmlentities($uti_nom,ENT_QUOTES,"utf-8") ?>'>
            </p>            
            <p>
                <label for='uti_prenom'>uti_prenom</label>
                <input type='text' name='uti_prenom' id='uti_prenom' required value='<?= htmlentities($uti_prenom,ENT_QUOTES,"utf-8") ?>'>
            </p>
            <p>
                <label for='uti_dtnais'>uti_dtnais</label>
                <input type='date' name='uti_dtnais' id='uti_dtnais' required value='<?= htmlentities($uti_dtnais,ENT_QUOTES,"utf-8") ?>'>
            </p>
            <p>
                <label for='uti_profil'>uti_profil</label>
                <select name='uti_profil' id='uti_profil'>
                    <?=Entity::HTMLselect("select pro_id,pro_nom from profil","pro_id","pro_nom",$uti_profil);?>
                </select>
            </p>            
            <input type="submit" name="btsubmit" value="Enregistrer">
        </form>
                