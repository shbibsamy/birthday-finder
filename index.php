<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mettez votre date d'anniversaire et l'appli vous dira combien de jours il faut attendre.">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Compteur Anniversaire</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>
                Calcul d'anniversaire
            </h1>
        </header>
        <main>
            <form action="birthday.php" method="post">
                <label class="label-prenom">
                    <span>
                        Veuillez entrer votre prénom.
                    </span>
                    <input type="text" name="prenom" class="input-nom">
                </label>
                <fieldset>
                    <legend>
                        Veuillez compléter les champs ci-dessous.
                    </legend>
                    <label class="label-date">
                        <span>Jour de naissance :</span>
                        <input type="text" class="input-date" name="date-jour">
                        <small>(en chiffres)</small>
                    </label>
                    <label class="label-date">
                        <span>Mois de naissance :</span>
                        <input type="text" class="input-date" name="date-mois">
                        <small>(en chiffres)</small>
                    </label>
                    <input type="submit" value="calculer" name="calculer" class="input-calculer">
                </fieldset>
            </form>
        </main>
    </div>
    
</body>
</html>