<?php
    if (isset($_POST)) {
        $prenom = htmlspecialchars($_POST["prenom"]);
        $jour = intval(htmlspecialchars($_POST["date-jour"]));
        $mois = intval(htmlspecialchars($_POST["date-mois"]));
        $resultat = "L'anniversaire de " .$prenom. " est dans " .calculerDate($jour, $mois). " jours.";
    } else {
        $resultat = "date pas trouvé";
    }

    function calculerDate($jour, $mois) {
        $annee = date('Y');
        $annif = strtotime("$annee/$mois/$jour");
        $aujourdhui = strtotime(date('Y/m/d'));
        $diff = ceil(($annif - $aujourdhui)/86400);
        $totalJours = date('L', strtotime('today')) == 0? 365 : 366;
        $result = $diff > 0 ? $diff : $totalJours + $diff;
        return $result;
    }
?>