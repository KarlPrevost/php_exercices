<?php 
class MyAttribute {
    public function __construct($_string){
    $this->string = $_string;
    }
    public function display() {
        echo $this->string . "\n";
    }
}
?>