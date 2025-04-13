<?php
$zilina =8;
$Kosice = -9;




if ($zilina < 0 || $Kosice < 0) {
    echo "Nevyhodnotený zápas";
} elseif ($zilina > $Kosice) {
    $vysledok = $zilina - $Kosice;
    echo "Vyhrala Žilina o $vysledok gól(y)";
} elseif ($Kosice > $zilina) {
    $vysledok = $Kosice - $zilina;
    echo "Vyhrali Košice o $vysledok gól(y)";
} else {
    echo "Remíza";
}
echo '<br>';

echo '<br>';

$wurl = ['https://www.learn2code.sk/&#039', 'https://www.centrum.sk/&#039', 'https://www.google.sk/?hl=sk&#039', 'https://www.github.com/&#039', 'https://www.sme.sk/&#039', 'https://www.mall.sk/&#039', 'https://webmail3.webglobe.sk/&#039']
