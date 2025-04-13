<?php

$datum=["10.2.2023","11.2.2023","12.2.2023","13.2.2023","14.2.2023","15.2.2023","10.5.2024","11.5.2024","12.5.2024","13.5.2024","14.5.2024"];


foreach ($datum as $d) {
    
    $parts = explode('.', $d);
    
    $novydat = date('d-m-Y', strtotime($parts[1] . '/' . $parts[0] . '/' . $parts[2]));
    
    echo $novydat . "<br>";
}

?>
