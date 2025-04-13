<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>





<?php

$wurl = ['https://www.learn2code.sk/', 'https://www.centrum.sk/', 'https://www.google.sk/?hl=sk', 'https://www.github.com/', 'https://www.sme.sk/', 'https://www.mall.sk/', 'https://webmail3.webglobe.sk/'];

foreach ($wurl as $value) {
    $remove_chars = array("https://www.", ".sk", "sk", "/", ".com", "https:", "?hl=");
    $result = str_replace($remove_chars, '', $value);
    
    echo '<a href="'. $value .'">'. strtoupper($result) .' <br>';
}


$object = 
'[{"Uname":"Jeremy Jones","Age":28,"Activity":"Big Mountain Snowboarding"},
{"Uname":"Dr House","Age":42,"Activity":"Doctor"},
{"Uname":"Peter Adamov","Age":78,"Activity":"IT Teacher"},
{"Uname":"Juraj Janosik","Age":28,"Activity":"Hero"}]';

$json = json_decode($object, true);
$output = "<ul>";
foreach ($json as $person) {
    $output .= "<h4>" . $person["Uname"] . "</h4>";
    $output .= "<p>Age: " . $person["Age"] . "</p>";
    $output .= "<p>Activity: " . $person["Activity"] . "</p>";
}
$output .= "</ul>";
echo $output;