<?php

$action = filter_input(INPUT_GET, 'action');
//action = new_user
include 'vues/vue_inscription.php';
require_once 'includes/ftc.inc.php'; 
//$bddExiste = $pdo->BDD_Existe();
                
switch ($action) {
    case 'new_user':    
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nom = htmlspecialchars(trim($_POST['nom']));
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $email = htmlspecialchars(trim($_POST['email']));
            $mdp = htmlspecialchars(trim($_POST['mdp']));
            $validationMdp = verifMdp($mdp);

            //hasher le mdp
            $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

            if ($validationMdp == 'true'){
                $pdo->enregistrerClient($nom, $prenom, $email, $mdpHash);
                echo 'Mot de passe enregistré avec succes';
                header("Refresh: 1;URL=index.php?uc=connexion");
            }else{
                echo 'le mot doit contenir: 12 car, 1 majuscule, minuscule, caratere special';
                echo ($validationMdp);
            }

            }  
        break;
    }
?>