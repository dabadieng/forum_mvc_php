<?php
class Ctr_message extends Ctr_controleur
{

    public function __construct($action)
    {
        parent::__construct("message", $action);
        $a = "a_$action";
        $this->$a();
    }

    public function a_index()
    {
        $data = Message::findAll("message");
        require $this->gabarit;
    } 

    public function a_edit()
    {
        if (isset($_POST["btsubmit"])) {

            $message = new message();
            $_POST["mes_date"] = date("Y-m-d H:i:s"); 
            $_POST["mes_utilisateur"] = $_SESSION["uti_id"]; 
            $message->chargerDepuisTableau($_POST);
            $message->sauver();
            var_dump($_POST); 

            header("location:" . hlien("message", "index"));
        } else {

            extract($_GET);

            if ($id > 0) //UPDATE        
                $message = new Message($id);
            else  //INSERT
                $message = new Message();

            extract($message->data);
        }

        require $this->gabarit;
    }
    public function a_del()
    {
        extract($_GET);
        Message::supprimerTout($id);
        header("location:" . hlien("message", "index"));
    }
}
