#!/usr/bin/php
<?php
//if ($argc == 2) {
//    $time = $argv[1];
//    date_default_timezone_set("Europe/Paris");
//    setlocale(LC_ALL, fr_FR);
//    // $time_sec = strtotime($time);
//    $puttime = mktime($time);
//    echo($time."\n");
//}



//echo strtotime ("2 January 1970"), "\n";

//$month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
//$week = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');

//date_default_timezone_set("Europe/Paris");  //устанавливаем время и дату для Парижа
//setlocale(LC_ALL, fr_FR); //
//    $time = strptime($argv[1],'%A %d %B %Y %H:%M:%S');
//if (!empty($time)) {
//    $time = mktime($time["tm_hour"], $time["tm_min"],$time["tm_sec"], $time["tm_mon"], $time["tm_mday"], $time["tm_year"] + 1900);
//}
 //$time = date("h:i:s M-d-Y", mktime(17, 12, 25, 3, 32, 1997));


date_default_timezone_set("Europe/Paris");  //устанавливаем время и дату для Парижа
setlocale(LC_ALL, fr_FR); //
$time = strptime($argv[1],'%A %d %B %Y %H:%M:%S');



if (!empty($time) && $argc == 2) {
    $time = mktime($time["tm_hour"], $time["tm_min"], $time["tm_sec"], $time["tm_mon"], $time["tm_mday"], $time["tm_year"] + 1900);
    $time += 2682000;
}
else
    echo "Wrong Format\n";
//$time += 2682000;


 echo ($time);
?>