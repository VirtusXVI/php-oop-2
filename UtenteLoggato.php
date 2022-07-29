<?php 
    require_once __DIR__ . "/Anonimo.php";
    require_once __DIR__ . "/Trait.php";

    class UtenteLoggato extends Anonimo{

        use Name;

        public $sconto = 20;
    }
?>