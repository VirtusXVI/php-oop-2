<?php 
    trait Name {

        public function getName($_name){
            if($_name === "Giovanni Verdi"){
                throw new Exception("User is Giovanni Verdi");
            }
            return $_name;
        }

    }
?>