        <h1>Les utilisateurs</h1>
        <table>
            <caption>
                <a href="<?=hlien("utilisateur","edit","&id=0")?>">Créer un Utilisateur</a>
            </caption>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Prénom</th>                
                <th>Date de naissance</th>
                <th>Profil</th>                
                <th>editer</th>
                <th>supprimer</th> 
            </tr>
            <?php
            foreach($data as $row) {
                $row=array_map("cb_htmlentities",$row);
                extract($row);
                echo "<tr>";
                echo "<td>$uti_id</td>";
                echo "<td>$uti_nom</td>";
                echo "<td>$uti_prenom</td>";
                echo "<td>$uti_dtnais</td>";
                echo "<td>$pro_nom</td>";                
                echo "<td><a href='" . hlien("utilisateur","edit","&id=$uti_id") . "'>Editer</a></td>";
                echo "<td><a href='" . hlien("utilisateur","del","&id=$uti_id") . "'>Supprimer</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
