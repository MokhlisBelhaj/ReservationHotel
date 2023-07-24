<?php
include 'models\chamber.php';
class ChambreController {
    public function afficherChambres() {
        $chambres = Chambre::getAllChambres();
        return $chambres;
    }
}

