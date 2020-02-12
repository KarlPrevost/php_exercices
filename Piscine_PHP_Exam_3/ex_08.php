<?php
class hero extends personnage {
    private $vie;
    private $force;
    private $magie;
    private $agilité;
    private $intelligence;
    const MY_HERO = "Pango";
    public function __construct($vie,$force,$magie,$agilité,$intelligence) {
            $this->vie = $vie;
            $this->force = $force;
            $this->magie = $magie;
            $this->agilité = $agilité;
            $this->intelligence = $intelligence;   
    }
    public function __getVie($vie) {
        return $this->vie; 
    }
    public function __getForce($force) {
        return $this->force; 
    }
    public function __getMagie($magie) {
        return $this->magie; 
    }
    public function __getAgilité($agilité) {
        return $this->agilité; 
    }
    public function __getIntel($intelligence) {
        return $this->intelligence; 
    }
}
?>