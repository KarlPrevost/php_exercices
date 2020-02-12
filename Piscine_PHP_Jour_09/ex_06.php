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
class Paladin extends Character {
    protected $name;
    protected $endurance = 100;
    protected $agility = 8;
    protected $strength = 10;
    protected $mana = 3;
    const CLASSE = "Paladin";
    function __construct($name){
        parent::__construct($name);
        echo $this->name.": I’ll engrave my name in the history !\n";
    }
    function attack(){
        echo $this->name . ": I'll crush you with my hammer !\n";
    }
    function __destruct() {
        echo  $this->name . ": Aarrg I can’t believe I’m dead...\n";
      }
}
class Mage extends Character {
    protected $name;
    protected $endurance = 70;
    protected $agility = 10;
    protected $strength = 3;
    protected $mana = 10;
    const CLASSE = "Mage";
    function __construct($name){
        parent::__construct($name);
        echo $this->name.": May the gods be with me.\n";
    }
    function attack(){
        echo $this->name . ": Feel the power of my magic !\n";
    }
    function __destruct() {
        echo  $this->name . ": By the four gods, I passed away...\n";
      }
}
// $polopop = new Paladin("Golgotta");
// $polopop->attack();
// $polopop2 = new Mage("Felina");
// $polopop2->attack();
?>