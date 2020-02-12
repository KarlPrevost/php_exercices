<?php
class C3PO extends Robot {
    protected static $numeroDeSerie;
    private $nom;
    private $type = "droide de protocole";
    public $str;
    public function __construct(){
        self::$numeroDeSerie++;
        self::$numeroDeSerie;
        $this->nom;
        echo "Je suis le droïde de protocole numéro " . self::$numeroDeSerie . ",enchanté de vous rencontrer !\n";
    }
    public function setNom($_nom){
        $this->nom = $_nom;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function setType($_type){
        $this->type = $_type;
    }
    public function getType(){
        return $this->type;   
    }
    public function dire($str){
        echo "C3PO no" . self::$numeroDeSerie . " : " . $str . "\n";
    }
    public function marcher(){
        echo "Je me mets en route, inutile d’insister.\n";
        parent::marcher();
    }
}
// $instance = new C3PO();
// $instance->dire("bonjour");
// // var_dump($instance->getType());







?>