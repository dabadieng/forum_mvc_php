<?php
class accueil extends Entity
{

    public function __construct($id = 0)
    {
        parent::__construct("utilisateur", "uti_id", $id);
    }

    static public function supprimerTout($id)
    {
        $sql = "delete from accueil where uti_id=:id";
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

    static function updateaccueil($ut_id)
    {
        $sql = parent::updateSql('accueil', $uti_id, self::getChamps('accueil'));
        return self::$link->exec($sql);
    }


}
