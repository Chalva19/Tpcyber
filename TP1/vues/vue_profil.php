<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index.php?uc=profil&action=modifier" method="POST">
            <table>
            <thead>
            <tr>
                <div>
                    <th><label for="staticEmail" class="col-sm-2 col-form-label">Nom : </label> </th>
                    <td><input type="text" id="nom" name="nom" value="<?php echo $_SESSION['nom_client'] ?>" required></td>
                </div></tr>
               
                <tr>
                <div>
                    <th><label for="staticEmail" class="col-sm-2 col-form-label">Prenom : </label></th>
                   <td> <input type="text" id="prenom" name="prenom" value="<?php echo $_SESSION['prenom_client'] ?>" required></td>
                </div></tr>
                
                <tr>
                <div></th>
                    <th><label for="staticEmail" class="col-sm-2 col-form-label">Email : </label>
                    <td><input type="text" readonly class="form-control-plaintext" id="mail" name='mail' value="<?php echo $_SESSION['mail_client'] ?>"required></td>
                </div></tr>
                
                <tr>
                <div>
                    <p > <th><label for="staticEmail" class="col-sm-2 col-form-label">Role : </label></th>
                     <td><?php echo $_SESSION['role_client'] ?> </p></td>
                </div></tr>
                <tr>
                <div>
                    <th>
                    <button type="submit"> Modifier </button> </th>
                   
                </div> </tr>
                    
            </table>
        </form>
    </body>
</html>