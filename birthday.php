<?php require_once("script-birthday-finder.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mettez votre date d'anniversaire et l'appli vous dira combien de jours il faut attendre.">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Anniversaire</title>
</head>
<body>
    <div class="wrapper">
        <main>
            <div class="resultat-anniversaire">
                <span>
                    <?php
                        echo $resultat;
                    ?>
                </span>
            </div>
            <a href="./index.php">Retour</a>
        </main>
    </div>
</body>
</html>