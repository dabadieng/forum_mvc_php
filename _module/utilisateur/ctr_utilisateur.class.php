<?php
class Ctr_utilisateur extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("utilisateur", $action);
        $a = "a_$action";
        $this->$a();
    }

    public function a_index()
    {
        $data = Utilisateur::findAll("utilisateur");
        require $this->gabarit;
    }

    public function a_edit()
    {
        if (isset($_POST["btsubmit"])) {

            $utilisateur = new Utilisateur();
            $utilisateur->chargerDepuisTableau($_POST);
            $utilisateur->sauver();
            header("location:" . hlien("utilisateur", "index"));
        } else {

            extract($_GET);

            if ($id > 0) //UPDATE        
                $utilisateur = new Utilisateur($id);
            else  //INSERT
                $utilisateur = new Utilisateur();

            extract($utilisateur->data);
        }

        require $this->gabarit;
    }
    public function a_del()
    {
        extract($_GET);
        Utilisateur::supprimerTout($id);
        header("location:" . hlien("utilisateur", "index"));
    }
}
