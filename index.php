<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
$maturita = [
    [
        'color'=> '#696969',
        'text' => 'Prvá veta je takáto',
        'url' => 'https://www.zilinak.sk/',
        'font-weight' => '200',
        'font-size' => '20px',
    ],
    [
        'color'=> '#6b8e23',
        'text' => 'Druhá veta je takáto',
        'url' => 'https://www.youtube.com/',
        'font-weight' => '600',
        'font-size' => '30px',
    ],
    [
        'color'=> '#afeeee',
        'text' => 'Tretia veta je takáto',
        'url' => 'https://soaza.edupage.org/',
        'font-weight' => '800',
        'font-size' => '16px',
    ],
    [
        'color'=> '#ff4500',
        'text' => 'Štvrtá veta je takáto',
        'url' => 'https://www.learn2code.sk/prihlasenie',
        'font-weight' => '200',
        'font-size' => '25px',
    ],
    [
        'color'=> '#ff4538',
        'text' => 'Piata veta je takáto',
        'url' => 'https://www.sme.sk/',
        'font-weight' => '800',
        'font-size' => '18px',
    ],
];

foreach ($maturita as $item) {
    echo "<p style='color: {$item['color']}; font-weight: {$item['font-weight']}; font-size: {$item['font-size']};'>
            <a href='{$item['url']}' target='_blank' style='color: inherit;'>{$item['text']}</a>
          </p>";
}
?>
</body>
</html>