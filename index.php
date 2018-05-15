<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>exercice 1-2</p>
<?php

$mois = array ('janvier', 'fev', 'mars', 'avril', 'aout', 'decembre');
echo $mois[2];

?>

<p> exercice 3 </p>

<?php

echo $mois[5];
?>

<p> exercice 4 </p>

<?php

$mois[4] = 'août';
echo $mois[4];
?>

<p> exercice 5 et 6</p>
<?php
$departement = array(
"9"=>"Ariège" ,
"12"=>"Aveyron",
"30"=>"Gard",
"31"=>"Haute-Garonne" ,
"32"=>"Gers",
"46"=>"Lot",
"32"=>"Gers" ,
"34"=>"Hérault",
"46"=>"Lot",
"48"=>"Lozère" ,
"65"=>"Haute-Pyrénées" ,
"66"=>"Pyrénées-orientales" ,
"81"=>"Tarn",
"82"=>"Tarn-et-garonne");

echo $departement["30"];

?>

<p>exercice 7</p>

<?php

$departement['11']='Aude';
print_r($departement);

?>
<p>exercice 8</p>

<?php

for ($numero = 0; $numero < 6; $numero++)
{
    echo $mois[$numero] . '<br>';
}
?>

<p>exercice 9</p>

<?php

foreach($departement as $element)

{

    echo $element . '<br />';

}
?>

<p>exercice 10</p>

<?php

foreach($departement as $cle => $element)

{

echo 'Le departement ' . $element . ' a le numéro' . $cle . '<br />';

}

?>


</body>
</html>