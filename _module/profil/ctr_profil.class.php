<?php
class Ctr_profil extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("profil", $action);
        $a = "a_$action";
        $this->$a();
    }

    public function a_index()
    {
        $data = Profil::findAll("profil");
        require $this->gabarit;
    }

    public function a_edit()
    {
        if (isset($_POST["btsubmit"])) {

            $profil = new Profil();
            $profil->chargerDepuisTableau($_POST);
            $profil->sauver();
            header("location:" . hlien("profil", "index"));
        } else {

            extract($_GET);

            if ($id > 0) //UPDATE        
                $profil = new Profil($id);
            else  //INSERT
                $profil = new Profil();

            extract($profil->data);
        }

        require $this->gabarit;
    }
    public function a_del()
    {
        extract($_GET);
        Profil::supprimerTout($id);
        header("location:" . hlien("profil", "index"));
    }
}
