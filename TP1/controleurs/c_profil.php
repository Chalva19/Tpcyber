<?php 
$action = filter_input(INPUT_GET, 'action'); 
 
if (empty($action)) {
    $action = 'vue'; 
}
switch ($action) {
    case 'vue':
        include 'vues/vue_profil.php';
        break;

    case 'modifier':
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars(trim($_POST['mail']));
        $_SESSION['nom_client'] = $nom;
        $_SESSION['prenom_client'] =$prenom;
        $_SESSION['mail_client'] = $email;
        $id_client = $_SESSION['id_client'];
        //var_dump($nom,$prenom,$email);
        $pdo->modifprofil($nom,$prenom,$email,$id_client);
        echo "votre profil a ete midifier avec succes ";
        header("Refresh: 1; URL=index.php?uc=accueil");
                exit();
        break;


}
?>