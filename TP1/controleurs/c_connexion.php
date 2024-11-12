<?php
include 'vues/vue_connexion.php';
require_once 'includes/ftc.inc.php'; 

$action = filter_input(INPUT_GET, 'action');

switch ($action) {
    case 'login':
        $email = htmlspecialchars(trim($_POST['mail']));
        $mdp = htmlspecialchars(trim($_POST['mdp']));
        $info_client = $pdo->login($email);
        // var_dump($info_client);

        if ($info_client) {
            $mdpHash = $info_client['mdp'];

            if (password_verify($mdp, $mdpHash)) {
                $_SESSION['nom_client'] = $info_client['nom'];
                $_SESSION['prenom_client'] = $info_client['prenom'];
                $_SESSION['role_client'] = $info_client['role'];
                $_SESSION['mail_client'] = $info_client['mail'];
                $_SESSION['id_client'] = $info_client['id'];
                var_dump($_SESSION['role_client']);

                echo 'Connecté avec succès';
                header("Refresh: 0.30; URL=index.php?uc=accueil");
                exit(); 
            } else {
                echo 'Mot de passe invalide';
            }
        } else {
            echo 'Mail incorrect !';
        }
        break;
}
?>
