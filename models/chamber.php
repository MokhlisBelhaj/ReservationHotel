<?php
    class Chambre {
    public $ID;
    public $numeroChambre;
    public $type;
    public $tarif;
    public $disponibilite;

    public function __construct($ID, $numeroChambre, $type, $tarif, $disponibilite) {
        $this->ID = $ID;
        $this->numeroChambre = $numeroChambre;
        $this->type = $type;
        $this->tarif = $tarif;
        $this->disponibilite = $disponibilite;
    }        
        static public function getAllChambres() {
            $sql = "SELECT * FROM chambres";
            $chambres = db::connect()->prepare($sql);
            
           
            return $chambres;
        }
        
        
    }