<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exercice 6 Bonus </title>
</head>
<body>
    <h1># Exercice 6 Bonus</h1>
<p>Créez un tableau contenant les 12 mois de l'année. Afficher ces mois dans un "select".
</p>
<?php
$mois = array ('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
?>
<select>
<option>Selectionner le mois</option>
<?php
foreach ($mois as $element){
    ?>
    <option><?= $element ?></option>
<?php
}
?>
</select>

<select>
<?php
    $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
    $tablength = count($tab);
    for($i = 0; $i < $tablength; $i++){
        ?>
        <option>Selectionner le</option>
        <option><?= $tab[$i] ?></option>
        <?php
    }
    ?>
    </select>
</body>
</html>