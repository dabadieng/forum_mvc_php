<?php
class Message extends Entity
{

    
    public function __construct($id = 0)
    {
        parent::__construct("message", "mes_id", $id);
        
    }

    static public function supprimerTout($id)
    {
        $sql = "delete from message where mes_id=:id";
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

    static function updateMessage($mes_id)
    {
        $sql = parent::updateSql('message', $mes_id, self::getChamps('message'));
        return self::$link->exec($sql);
    }

    
	/**
	 * Retourne tous les enregistrements de la table
	 * 
	 * @return array : tableau d'enregistrements
	 */
	static function findAll($table) {
		$sql="select * from $table, utilisateur where mes_utilisateur=uti_id order by mes_date desc";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}
	
	/**
	 * Charge un enregistrement depuis la base de données
	 *
	 * @param integer $id        	
	 */
	function charger($id) {
		$sql="select * from $this->table where $this->cle=:id order by mes_date desc";
		$statement = self::$link->prepare($sql);
		$statement->bindValue(":id",$id,PDO::PARAM_INT);
		$statement->execute();			
		$this->data=$statement->fetch();
	}

}
