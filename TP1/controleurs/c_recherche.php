<?php 
//require_once 'includes/class.pdo.inc.php';

//$action = filter_input(INPUT_GET, 'action');
$recherch = htmlspecialchars(trim($_POST['recherche']));
if (empty($recherch)){
    include 'vues/vue_recherche.php';

}else{
    $pdo->recherche_client($recherch);
        include 'vues/vue_recherche.php';
}
?>