<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Opakovanie teórie</title>
</head>
<body>

<?php



$prem= 'Matus';

echo $prem;

echo '<br>';

$del= 11/4;
echo (int)$del;


$cena =50;
$pocet =5;

$celkovaCena = $cena * $pocet;

if ($celkovaCena > 300) {
    echo "Nemám dosť love";
} elseif ($celkovaCena == 300) {
    echo "Kupujem to, frajerka stojí to";
} else {
    echo "Kupujem to";
} 
echo '<br>';
echo "$celkovaCena";

echo '<br>';

echo '<br>';

// $prem=[5,8,9,7];
// foreach ($prem as $key => $value) {
//     # code...
// }

// for ($i=0; $i < 5; $i++) { 
//     # code...
// }

$pocet = 8;

if (gettype($pocet) == "integer" ){
    if ($pocet>0) {
        for ($i=1; $i <= $pocet; $i++) { 
            echo "$i . cislo";
            if ($i <>$pocet) {
                echo " - ";
            };
        }
    }
}

echo '<br>';

echo '<br>';

$arr = ["jana", "peter", "jano", "marek", "juraj"];

echo '<pre>';
print_r($arr);
echo '</pre>';
unset($arr[3]);

echo '<pre>';
print_r($arr);
echo '</pre>';

sort($arr);

echo '<pre>';
print_r($arr);
echo '</pre>';

echo count($arr);

array_push($arr, "Linda");

echo '<pre>';
print_r($arr);
echo '</pre>';

array_unshift($arr, "Alesa");

echo '<pre>';
print_r($arr);
echo '</pre>';



echo '<br>';



$n = 6;
echo " $n ! : ";
for ($i = $n; $i >= 0; $i--) {
    echo $i;
    if ($i > 1) {
        echo ". ";
    }
}

echo '<br>';
echo '<br>';

$obchod = ["tricko" => 15, "nohavice" => 30, "tenisky" => 40,"sako" => 82,"ponozky" => 11 ];


foreach ($obchod as $polozka => $cena) {
    echo "$polozka stojí $cena; ";
}

echo '<br>';
echo '<br>';

$max_cena = max($obchod);
$nazov_najdrazsieho = array_search($max_cena, $obchod);
echo "Najdrahšia položka nákupu: $nazov_najdrazsieho s cenou $max_cena";

echo '<br>';
echo '<br>';

$celkova_cena = 0;

foreach ($obchod as $cena) {
        $celkova_cena =$celkova_cena+ $cena;
}

echo "celkova cena za nakup je $celkova_cena ";














?>    
</body>
</html>