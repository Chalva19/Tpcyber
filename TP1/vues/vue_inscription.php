<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-form">
    <h1>Inscription</h1>
    <form action="index.php?uc=inscription&action=new_user" method="POST"> 
        <div>
            <input placeholder="Nom" type="text" id="nom" name="nom" required>
        </div>
        <div>
            <input placeholder="Prénom" type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <input placeholder="Adresse mail" type="email" id="email" name="email" required>
        </div>
        <div>
            <input placeholder="Mot de passe" type="password" id="mdp" name="mdp" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </div>
    </form>
    <div class="signup-link">
            <p>Vous avez déja un compte ? <a href='index.php?uc=connexion'>Cliquez ici pour vous connecter</a></p>
        </div>
    </div>
</body>

</html>