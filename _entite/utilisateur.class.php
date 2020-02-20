<?php
class Utilisateur extends Entity
{

    public function __construct($id = 0)
    {
        parent::__construct("utilisateur", "uti_id", $id);
    }



    static public function supprimerTout($id)
    {
        $sql = "delete from utilisateur where uti_id=:id";
        $statement = self::$link->prepare($sql);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        //parent::supprimer("profil", "pro_id", $id);
    }


    /**
     * récupere tous les enregistrements de la table message
     */
    static public function getMessage(): array
    {
        return parent::findAll("message");
    }

    static function updateUtilisateur($ut_id)
    {
        $sql = parent::updateSql('utilisateur', $uti_id, self::getChamps('utilisateur'));
        return self::$link->exec($sql);
    }

    /* Retourne tous les enregistrements de la table
	 * 
	 * @return array : tableau d'enregistrements
	 */
    static function findAll($table)
    {
        $sql = "select * from $table,profil where uti_profil = pro_id";
        $result = self::$link->query($sql);
        return $result->fetchAll();
    }
}
