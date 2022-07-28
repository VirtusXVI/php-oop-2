<?php 
    class Prodotto{

        public $nome;

        public $prezzo;

        public $marca;

        public $tipo;
        
        public function __construct($_nome, $_prezzo, $_marca, $_tipo){
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->marca = $_marca;
            $this->tipo = $_tipo;
        }
    }
?>