        <h1>Message n°<?= $id ?></h1>
        <form method="post">
            <input type='hidden' name='mes_date' id='mes_date' value='<?= $mes_date ?>'>
            
            <p>
                <textarea id="mes_texte" name="mes_texte" cols="30" rows="5"><?= $mes_texte ?></textarea>
            </p>
            <p>
                <label for='mes_utilisateur'>mes_utilisateur</label>
                <select name='mes_utilisateur' id='mes_utilisateur'>
                    <?= Entity::HTMLselect("select uti_id,uti_nom from utilisateur", "uti_id", "uti_nom", $mes_utilisateur); ?>
                </select>
            </p>
            <p>
                <label for='mes_date'>mes_date</label>
                <input type='date' name='mes_date' id='mes_date' required value='<?= htmlentities($mes_date, ENT_QUOTES, "utf-8") ?>'>
            </p>
            <input type="submit" name="btsubmit" value="Enregistrer">
        </form>