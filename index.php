<?php 
    // Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
    // L'e-commerce vende prodotti per gli animali.
    // I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    // L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

    require_once __DIR__ . "/Prodotto.php";
    require_once __DIR__ . "/Anonimo.php";
    require_once __DIR__ . "/UtenteLoggato.php";
    // logged controlla che l'utente sia loggato oppure no,true = loggato, false = anonimo;
    $logged = false;
    if($logged === true){
        // cambiare il balance da 0 a 5
        $utente = new UtenteLoggato("Giovanni Verdi", 0);
    }else{
        // cambiare il balance da 0 a 5
        $utente = new Anonimo("Anonimo", 0);
    }

    $prodotto1 = new Prodotto("Purina Felix Le Ghiottonerie Cibo Umido per Gatti con Manzo", 2, "Purina","Cibo");
    $prodotto2 = new Prodotto("Cuccia", 2, "FEANDREA","Cucce");
    $prodotto3 = new Prodotto("Giochi per cani", 2, "PHYLES","Giochi");

    $utente->aggiungiProdotto($prodotto1);
    $utente->aggiungiProdotto($prodotto2);

    if(!$utente->calcolaConto($logged)){
        echo("Pagamento Non Riuscito");
    }else{
        echo("Pagamento Riuscito");
    }
?>