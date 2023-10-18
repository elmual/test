<?php 

$file = fopen("text.txt", "a");

fwrite($file, "ASPA GROUP education center \n");
fclose($file);


$file = fopen("text.txt", "r");
// $oxu = fread($file, 10);
while ($file) {
    $oxu = fgets($file);
    echo $oxu."<br>";
}
