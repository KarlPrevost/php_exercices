<?php
interface iCars {
    function getPrice();
    function getWeigth();
    function mineIsBigger($obj);
}
class BMW implements iCars {
    private $_price;
    private $_weight;
    function __construct($price = null, $weight = "4242"){
        $this->_price = $price;
        $this->_weight = $weight;
    }
    function getPrice(){
        return $this->_price;
    }
    function getWeigth(){
        return $this->_weight;
    }
    static function lessExpensive(){
        return 15000;
    }
    public function mineIsBigger($obj){
        switch($obj){     
        case Toyota:
            echo "Mine is bigger";
            break;
        case Smart: 
            echo "Mine is way bigger !";
            break;
        case Velib:
            echo "LOL";
            break;
        default:
           echo "Show Me !";
        }
    }
}
class Suzuki implements iCars {
    private $_price;
    private $_weight;
    function __construct($price = null, $weight = "4242"){
        $this->_price = $price;
        $this->_weight = $weight;
    }
    function getPrice(){
        return $this->_price;
    }
    function getWeigth(){
        return $this->_weight;
    }
    static function lessExpensive(){
        return 5000;
    }
    public function mineIsBigger($obj){
        switch($obj){     
        case "Toyota":
            echo "Mine is bigger";
            break;
        case "Smart": 
            echo "Mine is way bigger !";
            break;
        case "Velib":
            echo "LOL";
            break;
        default:
           echo "Show Me !";
        }
    }
}
?>