<?php 


$clients = $pdo->recup_clients();

$action = filter_input(INPUT_GET, 'action'); // filtre le lien
//uc = inscription 
if (empty($action)) {
    $action = 'vue'; // si uc est vide (le cas qd je lance le projet) empty= vide
}
switch ($action) {
    case 'vue':
        include 'vues/vue_espace_admin.php';
        break;
    case 'supprimer':
        //echo 'bienvenu';
        $id=$_GET['id'];
        $pdo->supprofil($id);
        echo "le profil a ete supprimer avec succes ";
        header("Refresh: 1; URL=index.php?uc=espace_admin");
                exit();
        break;
    }

//var_dump($clients);
?>