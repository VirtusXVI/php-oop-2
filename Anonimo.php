<?php  

    class Anonimo{

        public $name;

        public $balance;

        protected $cart;

        public function __construct($_name, $_balance){
            $this->name = $_name;
            $this->balance = $_balance;
        }

        public function aggiungiProdotto($_prodotto){
            $this->cart[] = $_prodotto;
        }

        public function calcolaConto($_logged){
            $sum = 0;
            $flag = false;
            if($_logged === true){
                for($i = 0; $i < count($this->cart); $i++){
                    $sum += $this->cart[$i]->prezzo;
                }
                $sum = $sum - ($sum * 0.2);
            }else{
                for($i = 0; $i < count($this->cart); $i++){
                    $sum += $this->cart[$i]->prezzo;
                }
            }
            if($this->balance < $sum){
                $flag = false;
            }else{
                $flag = true;
            }
            return $flag;
        }
    }
?>