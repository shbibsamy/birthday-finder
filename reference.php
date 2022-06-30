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
    <main>
        <?php
            echo date('d/m/Y'). '<br>';
            echo date('l d m Y h:i:s'). '<br>';
            echo date('c'). '<br>';
            echo date('r'). '<br>';
            echo 'Timestamp actuel : ' .time(). '<br>';
            echo 'Timestamp actuel : ' .time(). '<br>';
            // heure-minutes-secondes-jour-mois-année
            $t1 = mktime(8, 30, 0, 6, 28, 2022); 
            $gmt1 = gmmktime(8, 30, 0, 6, 28, 2022);
            echo 'Timestamp 28 juin 2022 08h30 (GMT+2) : ' .$t1. '<br>';
            echo 'Timestamp 28 juin 2022 08h30 (GMT) : ' .$gmt1. '<br>';

            echo 'Timestamp actuel : ' .time(). '<br>';

            $stt = strtotime('2022/06/28');
            echo 'Timestamp 28 juin 20122 minuit (GMT+2) : ' .$stt. '<br>';
            
            echo '<pre>';
            print_r(getdate());
            echo '</pre><br>';
            
            echo '<pre>';
            print_r(getdate($stt));
            echo '</pre>';
        ?>
    </main>
</body>
</html>