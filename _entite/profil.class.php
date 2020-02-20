<?php
class Profil extends Entity
{

    public function __construct($id = 0)
    {
        parent::__construct("profil", "pro_id", $id);
    }



    static public function supprimerTout($id)
    {
        $sql = "delete from profil where pro_id=:id";
        $statement = self::$link->prepare($sql);
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        //parent::supprimer("profil", "pro_id", $id);
    }



    static function updateProfil($pro_id)
    {
        $sql = parent::updateSql('profil', $pro_id, self::getChamps('profil'));
        return self::$link->exec($sql);
    }

}
