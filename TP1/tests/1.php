<?php
require_once 'includes/ftc.inc.php';
function test() {
    // tableau=test contien valeur mdp et son code erreur
    $test = [
        "aaaaaaaaaa1?" => "le mot de passe doit contenur un caracteres majuscule",
        "AAAAAAAAAA1?" => "le mot de passe doit contenur un caracteres minuscule",
        "Aaaaaaaaaaa?" => "le mot de passe doit contenur un chiffre",
        "Aaaaaaaaaa1a" => "le mot de passe doit contenir un caracteres speciale",
        "Aaaaaaaa1?" => "le mot de passe doit contenir au moins 12 caracteres",
        "Aaaaaaaaaa1?" => "true",
    ];
    foreach($test as $mdp => $message){
        $resulta = verifMdp($mdp);
        if ($resulta == $message){
            echo " '$mdp' function verifMdp ok <br> ";
        }else{
            echo "function verifMdp erreur : '$message' ";
        }
    }
}
test();
?>