<?php
class Ctr_database extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("database", $action);
        $a = "a_$action";
        $this->$a();
    }

    public function a_creer()
    {
        $sql = Database::creer("../_sql/forum.sql");
        require $this->gabarit;
    }

    public function a_dataset()
    {
        $nbutilisateur = Database::genererUtilisateur(30, 3);
        $nbprofil = Database::genererProfil();
        $nbmsg = Database::genererMsg(100,30); 
        require $this->gabarit;
    }
}
