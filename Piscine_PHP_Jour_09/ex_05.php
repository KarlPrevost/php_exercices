<?php
class Character {
    protected $name;
    protected $endurance = 50;
    protected $agility = 2;
    protected $strength = 2;
    protected $mana = 2;
    const CLASSE = "Character";
    function __construct($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function getEndurance(){
        return $this->endurance;
    }
    function getAgility(){
        return $this->agility;
    }
    function getStrength(){
        return $this->strength;
    }
    function getMana(){
        return $this->mana;
    }
    function getClasse(){
        return self::CLASSE;
    }
}
// $perso = new Character("Albert");
// echo $perso->getName()."\n";
// echo $perso->getEndurance()."\n";
// echo $perso->getAgility()."\n";
// echo $perso->getStrength()."\n";
// echo $perso->getMana()."\n";
// echo $perso->getClasse()."\n";
?>