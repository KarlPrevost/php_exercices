<?php 
class MyAttributes {
    private $a;
    private $b;

    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
    public function setA($a){
        $this->a = $a;
    }
    public function setB($b){
        $this->b = $b;
    }
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
    public function display(){
        echo $this->a . " " . $this->b . "\n";
    }
}
?>