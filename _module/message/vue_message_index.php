        <h1>Les messages</h1>
        <table>
            <caption>
                <a href="<?= hlien("message", "edit", "&id=0") ?>">Créer un message</a>
            </caption>
            <tr>
                <th>ID</th>
                <th>Message</th>
                <th>Utilisateur</th> 
                <th>Date</th>
                <?php
                if ($_SESSION["uti_id"] <= 2) {
                    echo "<th>editer</th>";
                    echo "<th>supprimer</th>";
                }
                ?>
            </tr>
            <?php
            foreach ($data as $row) {
                $row = array_map("cb_htmlentities", $row);
                extract($row);
                echo "<tr>";
                echo "<td>$mes_id</td>";
                echo "<td>$mes_texte</td>";
                echo "<td>$uti_nom</td>";
                echo "<td>$mes_date</td>";
                if ($_SESSION["uti_id"] <= 2) {
                    echo "<td><a href='" . hlien("message", "edit", "&id=$mes_id") . "'>Editer</a></td>";
                    echo "<td><a href='" . hlien("message", "del", "&id=$mes_id") . "'>Supprimer</a></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>