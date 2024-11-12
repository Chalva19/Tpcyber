<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
        <div class="header">
            <h1>Bienvenue, <?php echo $_SESSION['prenom_client'] . ' ' . $_SESSION['nom_client']; ?> !</h1>
            <p>Nous sommes heureux de vous revoir !</p>
        </div>

        <div class="card-container">
            <div class="card">
                <h2>Mon Profil</h2>
                <p>Gérer vos informations personnelles.</p>
                <a href='index.php?uc=profil'>Gérer mon profil</a>
            </div>

            <div class="card">
                <h2>Messagerie</h2>
                <p>Envoyer et recevoir des messages.</p>
                <a href='index.php?uc=message'>Accéder à la messagerie</a>
            </div>

            <div class="card">
                <h2>Recherche d'Utilisateurs</h2>
                <p>Trouver d'autres utilisateurs.</p>
                <a href='index.php?uc=recherche'>Rechercher des utilisateurs</a>
            </div>
            

            <?php if ($_SESSION['role_client'] != "user") : ?>
                <div class="card">
                    <h2>Espace Administrateur</h2>
                    <p>Gérer les utilisateurs et consulter les logs.</p>
                    <a href='index.php?uc=espace_admin&act=vue'>Gérer les utilisateurs</a>
                </div>
            <?php endif; ?>
        </div>
        <br>
        <a href="index.php" class="btn">Déconnexion</a>
    </div>
</body>
</html>