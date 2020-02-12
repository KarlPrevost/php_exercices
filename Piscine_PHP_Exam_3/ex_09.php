<?php
interface iHero {
    const MY_HERO = "Pango";
    public function __construct();
    public function __getForce();
    public function __getMagie();
    public function __getAgilité();
    public function __getIntel();
}
?>