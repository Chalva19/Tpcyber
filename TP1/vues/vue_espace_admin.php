<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="listeclients">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th >Nom</th>
                        <th>Prénom</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) {
                        $nom = $client['nom'];
                        $prenom = $client['prenom'];
                        $id = $client['id'];
                    ?>           
                    <tr>
                        <td class="tdUpdate">        
                            <?php echo $nom ?>
                        </td>
                        <td class="tdUpdate">
                            <?php echo $prenom ?>
                        </td>
                        <td class="tdUpdate">
                            <a href="index.php?uc=espace_admin&action=supprimer&id=<?php echo $id ?>" class="btnUpdate">Supprimer</a>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
            
            <a href="index.php?uc=accueil" type="submit" class="btn btn-primary">Terminer
            </a>
    </div>
</body>
</html>
