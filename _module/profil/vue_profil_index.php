        <h1>Les profils</h1>
        <table>
            <caption>
                <a href="<?=hlien("profil","edit","&id=0")?>">Créer un profil</a>
            </caption>
            <tr>
                <th>id</th>
                <th>Nom</th>               
                <th>editer</th>
                <th>supprimer</th>
            </tr>
            <?php
            foreach($data as $row) {
                $row=array_map("cb_htmlentities",$row);
                extract($row);
                echo "<tr>";
                echo "<td>$pro_id</td>";
                echo "<td>$pro_nom</td>";             
                echo "<td><a href='" . hlien("profil","edit","&id=$pro_id") . "'>Editer</a></td>";
                echo "<td><a href='" . hlien("profil","del","&id=$pro_id") . "'>Supprimer</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
