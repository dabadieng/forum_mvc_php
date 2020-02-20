<h1>Mon forum</h1>

<form action="" method="POST">
    <p>
        <label for='uti_id'>Veuillez entrer votre ID </label>
        <input type='text' name='uti_id' id='uti_id' required value='<?= htmlentities($uti_id, ENT_QUOTES, "utf-8") ?>'>
    </p>
    <input type="submit" name="btsubmit" value="Valider">
</form>