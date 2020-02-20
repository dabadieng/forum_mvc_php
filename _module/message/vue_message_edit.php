        <h1>Message n°<?= $id ?></h1>
        <form method="post">
            <input type='hidden' name='mes_id' id='mes_id' value='<?= $mes_id ?>'>
            
            <p>
                <textarea id="mes_texte" name="mes_texte" cols="30" rows="5"><?= $mes_texte ?></textarea>
            </p>
            <input type="submit" name="btsubmit" value="Enregistrer">
        </form>