<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-form">
        <h2>Connexion</h2>
        <form action="index.php?uc=connexion&action=login" method="POST">
            <div>
                <input type="text" name="mail" placeholder="Mail" required>
            </div>
            <div>
                <input type="password" name="mdp" placeholder="Mot de passe" required>
            </div>
            <div>
                <button type="submit">Se connecter</button>
            </div>  
        </form>
        <div class="signup-link">
            <p>Vous n'avez pas de compte ? <a href='index.php?uc=inscription'>Cliquez ici pour vous inscrire</a></p>
        </div>
    </div>
</body>
</html>
