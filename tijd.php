<?php
$value1 = explode(" ", $argv[1]);

foreach($value1 as $value){
    $letter = substr($value, -1);
    $getal = (int)$value;

    switch($letter){
        case "s":
            $sec = $getal;
        break;
        case "m":
            $min = $getal * 60;
        break;
        case "u":
            $uur = $getal * 3600;
        break;
        case "d": 
            $dag = $getal * 86400;
        break;
    }
}
$totaal = $sec + $min + $uur + $dag;
echo $totaal. " seconden";

?>