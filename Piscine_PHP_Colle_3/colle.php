<?php
class Robot {
    public function marcher() {
        echo "JE MARCHE" . PHP_EOL;
    }
}


class C3PO extends Robot {
    protected static $numeroDeSerie;
    private $nom;
    private $type = "droide de protocole";
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
    public function initierProtocole(){
        while (true){
        echo "En attente d’interaction utilisateur : \n";
        $var = fopen("php://stdin", "r");
        $newVar = fgets($var);
        $newVar = trim(preg_replace("/\s+/", " ", $newVar));
        $newArr = explode(" ",$newVar);
        $newArr2 = array_slice($newArr, 1);
        $newString = implode(" ", $newArr2);
        switch($newArr[0]){
            case "dire":
            $this->dire($newString);
            break;
            case "marcher":
            $this->marcher();
            break;
            case "repos";
            echo "Fin du protocole\n";
            break 2;
            break;
        }        
    }
}
}
$instance = new C3PO();
$instance->initierProtocole();
?>