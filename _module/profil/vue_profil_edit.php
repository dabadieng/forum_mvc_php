        <h1>Profil n°<?= $id ?></h1>
        <form method="post">
            <input type='hidden' name='pro_id' id='pro_id' value='<?= $pro_id ?>'>
            <p>
                <label for='pro_nom'>pro_nom</label>
                <input type='text' name='pro_nom' id='pro_nom' required value='<?= htmlentities($pro_nom, ENT_QUOTES, "utf-8") ?>'>
            </p>
            <input type="submit" name="btsubmit" value="Enregistrer">
        </form>